<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package isha
 */

get_header();
?>
<!-- News Area -->
    <section class="newsblog archive single section">
        <div class="container">
            <div class="row <?php if( get_theme_mod('isha_blog_single_layout_settings') == 'left' ):  echo esc_attr__( 'flex-row-reverse', 'isha' );  endif; ?>">
				<?php if ( is_active_sidebar( 'sidebar-1' ) ) { ?>
					<div class="mt-5 <?php if(get_theme_mod('isha_blog_single_layout_settings') == 'none'):echo  esc_attr__( 'col-lg-12 none', 'isha' ); else: echo esc_attr__( 'col-lg-9', 'isha' ); endif;?> col-12">
						<!-- Single News -->
						<?php
							while ( have_posts() ) :
							the_post();
							get_template_part( 'template-parts/content', 'single' );
							endwhile; // End of the loop. ?>
						<!-- End Single News -->
					</div>
					<?php if(get_theme_mod('isha_blog_single_layout_settings') != 'none'):?>
						<div class="col-lg-3 col-12">
							<!-- Blog Sidebar -->
							<div class="sidebar-main">
								<?php get_sidebar();?>
							</div>
							<!--/ End Blog Sidebar -->
						</div>
					<?php endif;
				}
				if ( ! is_active_sidebar( 'sidebar-1' ) ) { ?>
					<div class="mt-5 col-lg-12 col-12 none">
						<!-- Single News -->
						<?php
							while ( have_posts() ) :
							the_post();

							get_template_part( 'template-parts/content', 'single' ); 	
							endwhile; // End of the loop. ?>
						<!-- End Single News -->	
					</div>
				<?php } 
				
			
				$nextPost = get_previous_post();
			
				if(!empty($nextPost) && ($nextPost->ID != get_the_ID())):
			
					?>
					<div class="left-float-post">
						<div class="media">
							<img class="mr-3" src="<?php echo esc_url(get_the_post_thumbnail_url($nextPost->ID,'new-blog-155-125'));?>">
							<div class="media-body">
								<span class="post-close" id="left-float-post"><i class="fa fa-times"></i></span>
							<span class="post-arrow "><i class="fa fa-backward"></i></span>
							<h3 class="mt-0 mb-1"><a href="<?php echo esc_url(get_permalink($nextPost->ID));?>"><?php echo esc_html(get_post($nextPost->ID)->post_title);?></a></h3>
							<p><?php echo esc_html(get_the_date('',$nextPost->ID));?></p>
							</div>
						</div>
					</div>
					<?php 
				endif;
				$prevPost = get_next_post();
				if(!empty($prevPost) && ($prevPost->ID != get_the_ID())):
					?>
					<div class="right-float-post">
						<div class="media">
							<img class="mr-3" src="<?php echo esc_url(get_the_post_thumbnail_url($prevPost->ID,'new-blog-155-125'));?>">
							<div class="media-body">
								<span class="post-close" id="right-float-post"><i class="fa fa-times"></i></span>
								<span class="post-arrow " ><i class="fa fa-forward"></i></span>
								<h3 class="mt-0 mb-1"><a href="<?php echo esc_url(get_permalink($prevPost->ID));?>"><?php echo esc_html(get_post($prevPost->ID)->post_title);?></a></h3>
								<p><?php echo esc_html(get_the_date('',$prevPost->ID));?></p> 		
							</div>
						</div>
					</div>
					<?php 
				endif;?>
			
			</div>
        </div>
    </section>
    <!--/ End News Area -->
<?php
get_footer();