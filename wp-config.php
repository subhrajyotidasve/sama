<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
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
define( 'DB_NAME', 'sama' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'UO{$4_Ql8nH-PZ)<=P?nNQ@3FxIW,(y*J,i)4n7__L]4Y&o~OYol^x3weWH4MhSh' );
define( 'SECURE_AUTH_KEY',  '?>`<Yt,rI%eYo+bHYh`hAPLH7R56iRT-w6`2m9GZ]Vy(3/:B4z.1TTZC0<8uhUsV' );
define( 'LOGGED_IN_KEY',    's|IozGzSH|>WuCL233-#mVKQ^UEn: }^vWyfK%ILhRGu=|oCvSm]Ku<1`P`m.{;=' );
define( 'NONCE_KEY',        'Xv,Si4&[.ADc:jg&E(N$pL?Jkfy@#4[#pW$*bGDZ@;z8&[9]@]9o q6GEc3^VU?[' );
define( 'AUTH_SALT',        '-t-n~vb|)Dm;QL3i/o5i*loS72*t*7P3tjeYE}YUsFK)l=+}Ocsjfeq]xqLM(xa/' );
define( 'SECURE_AUTH_SALT', ']*j[>+k?<B)wz(,n/TE*$%P/dX=$tjH6hDOl+Ht,]5wTE|lHghFfChPVlC_*[Zc2' );
define( 'LOGGED_IN_SALT',   '7Uhhf3J!Z,bgUeA8$]8|Ugmhr+EZ>g.#Ta|8dRHM3JtfgY|PWE&>@}9yfNvee%VW' );
define( 'NONCE_SALT',       'V4WHFkK-+3bX.Z;W[Nz8A?yBs%z@4-[<.%CI]3w8Y<JMb R.W](r$Fh:js]B<v *' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
