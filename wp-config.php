<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'adya_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '4dy4_4dm1n' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8ZUdNw7kdLP}t9)FzS*pc5tb[|=6{difXJg%MufUvcS(vwIHBft ci58Ga!k,L|7' );
define( 'SECURE_AUTH_KEY',  'UaJ}HMD9;vqC;}}#3n`-FXz(gTXH)&~G4@B3_/1<Frmc28!Yn)A_|(1hdLcGS8y(' );
define( 'LOGGED_IN_KEY',    '?7(*}raiw_OeJqb@d$Mb6oxKS&O}5&Zm,EFtA6,}]Q3>U[C^zuKmn*Vk4&150h3k' );
define( 'NONCE_KEY',        'OsB*kwpXV_HG#DqSaNs#?<t*;z)!U0rhK{.Dxgv T^J!foSFk:KZMeO?/`yFiGd-' );
define( 'AUTH_SALT',        '!`f3iNCWj>Na#/Kd*vcj9gD7MT&(6u-:]Lvqm&Y,cBX!Y0k;Jx6l(sJ@T;BKJ|R-' );
define( 'SECURE_AUTH_SALT', 'A89*#EXEXWv({9-yn`U}ATqOT#N{F[Dei#?0riHQIK &G3]^u[f-7lrm`XZC]p>r' );
define( 'LOGGED_IN_SALT',   ':F`&fQCm!y-<cVOmt9dAr&)!=qRt|S|_J^=,:TuNI|D[:b2Cm_m(u/XUq]5_`~S ' );
define( 'NONCE_SALT',       'jEG6J)2^T>::tp.]ygQ*#!IWL?9|6n+6KV+B(jg~_x!1amXtph~K?s<w%<?x7-xG' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
