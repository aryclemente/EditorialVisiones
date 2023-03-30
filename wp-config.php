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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'editorial_visiones' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         '}rW?WM$CZV57n<|:gSS:@@5byL;nOi`wn3|V+s3B?6:t4j&KVj2VJp0&]U+cOLi!');
define('SECURE_AUTH_KEY',  'gpB_kr)IyP;}g@$-3(<)p9&18O@__aNo|S_3TgfTnS|ajH{yX5z5jk@F%h]0SQ+:');
define('LOGGED_IN_KEY',    '2LwT/TZ+_S6s3#&+1HWAfn}456+4B)#VFtT~^Q17JPaRR;/E[FJ?+u-RYq3#gRI`');
define('NONCE_KEY',        '_so]>7*]AAW9LS:~)vo_x]*Yxm+:]W)?JO(y]Et+ibr:Z*y02-6u[ae%F#VqefFg');
define('AUTH_SALT',        'CVT|a/TJ:V/7waLOapNu#.~}_Hs|uAV ;/ey.ze-eqhu>V*lPiR]#5u7c5Yf/-Vu');
define('SECURE_AUTH_SALT', 'V&sl<0[p[k2CUUr|h JsjUeb%Ou/TE?~F{-Q<omI{O4A-^xG{_#)gA}~rJEr?< h');
define('LOGGED_IN_SALT',   'ldAKD9(YHcw-Se)CXonD>jS4%rv{@KQhff{Ke`~32+ |lvy|GCGw8:AEYAl>@73=');
define('NONCE_SALT',       'i>>/=T]L~.l9Jc6Re93o1X|S5H-rI+8RwCq2`{wX1#UG{$wmrqk,9`LAVnhci+_!');

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
