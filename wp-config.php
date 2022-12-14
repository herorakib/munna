<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'man-art' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
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
define( 'AUTH_KEY',         'K%siIdJ1[{~11*VtQ2>nM~jEQTs&ZDH579ba=X8]H}n;3f(^(sbcoJs}n5kUc8rf' );
define( 'SECURE_AUTH_KEY',  ']qD8FfulqhmUWg[[dFw68Q]@bU!Tqy=um$5n:%]W[$En};K/;8Jm0vPPd/(ybN%t' );
define( 'LOGGED_IN_KEY',    '^-1lcd#S9Ry;?}-9%~#>p!aPdk53_9DpZ)hK7T9*V4408!dFcM2jUwb=H,?:T_ne' );
define( 'NONCE_KEY',        'pEpDPWTlo,ay6n:@U[;T9DbrrbSt`ndE7%x.8dB:TA?lB9Q+2oV#,|[,?2U;(b4G' );
define( 'AUTH_SALT',        'S)P0W(O3ko@]nNEy9M4AsLR.r7F|`Q[KITpRATC;mN2!u+|X2f<~5|5L86#X{pRg' );
define( 'SECURE_AUTH_SALT', '8=u}Kc|Ud#<H.ljD(jasb L`b?TAX< ZE$*</xXrs{BB6UK3}9;X<BHV<x@MB<Zw' );
define( 'LOGGED_IN_SALT',   '(0mu7yKdOZg[&(0PTiTWzTp}01()%!Z[!R[TJH?l+*nPCpqwa*J/Y8)y/MPGqZyD' );
define( 'NONCE_SALT',       '(=4.SdWmJGszb~6UGi6T6wL+13hcddVISg!1V?=#,byPKYV1)T6?.7!h0)?}^yZj' );

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
