<?php
/** 
 * Page editor control
 *
 * @package consultstreet
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {
	return null;
}

/**
 * Class to create a custom tags control
 */
class ConsultStreet_Page_Editor extends WP_Customize_Control {

	/**
	 * Flag to include sync scripts if needed
	 *
	 * @var bool|mixed
	 */
	private $needsync = false;

	/**
	 * ConsultStreet_Page_Editor constructor.
	 *
	 * @param WP_Customize_Manager $manager Manager.
	 * @param string               $id Id.
	 * @param array                $args Constructor args.
	 */
	public function __construct( $manager, $id, $args = array() ) {
		parent::__construct( $manager, $id, $args );
		if ( ! empty( $args['needsync'] ) ) {
			$this->needsync = $args['needsync'];
		}
	}

	/**
	 * Enqueue scripts
	 *
	 * @since   1.1.0
	 * @access  public
	 * @updated Changed wp_enqueue_scripts order and dependencies.
	 */
	public function enqueue() {
		wp_enqueue_style( 'consultstreet_text_editor_css', arile_extra_plugin_url . '/inc/consultstreet/customizer/customizer-page-editor/css/consultstreet-page-editor.css', array(), 999 );
		wp_enqueue_script(
			'consultstreet_text_editor', arile_extra_plugin_url . '/inc/consultstreet/customizer/customizer-page-editor/js/consultstreet-text-editor.js', array(
				'jquery',
				'customize-preview',
			), 999, true
		);
		if ( $this->needsync === true ) {
			wp_enqueue_script( 'consultstreet_controls_script', arile_extra_plugin_url . '/inc/consultstreet/customizer/customizer-page-editor/js/consultstreet-update-controls.js', array( 'jquery', 'consultstreet_text_editor' ), 999, true );
			wp_localize_script(
				'consultstreet_controls_script', 'requestpost', array(
					'ajaxurl'           => admin_url( 'admin-ajax.php' ),
					'thumbnail_control' => 'consultstreet_feature_thumbnail', // name of image control that needs sync
					'editor_control'    => 'consultstreet_page_editor', // name of control (theme_mod) that needs sync
					'thumbnail_label'   => esc_html__( 'About background', 'consultstreet' ), // name of thumbnail control
				)
			);
		}
	}

	/**
	 * Render the content on the theme customizer page
	 */
	public function render_content() {
		?>
		<label>
			<?php if ( ! empty( $this->label ) ) : ?>
				<span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>
			<?php endif; ?>
			<input type="hidden" <?php $this->link(); ?> value="<?php echo esc_textarea( $this->value() ); ?>" id="<?php echo esc_attr( $this->id ); ?>" class="editorfield">
			<a onclick="javascript:WPEditorWidget.toggleEditor('<?php echo esc_attr($this->id); ?>');" class="button edit-content-button"><?php _e( '(Edit)', 'consultstreet' ); ?></a>
		</label>
		<?php
	}
}
