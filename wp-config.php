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
define( 'DB_NAME', 'ING_Armada' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '5`tD6Tv:k#xd(oXN5Ndj([Yg[Z7UJ|5_=qW6H#seQUGc$D8o!qjE>-(xGI0s:jA4' );
define( 'SECURE_AUTH_KEY',  'wo:HrrJjL>^^x=L~k4GUv2oKjra:Oe JuBG4*6.;UXU6c Nc7u-`zu)xCoMf$?t?' );
define( 'LOGGED_IN_KEY',    'jW)*I*%]UCN.%XP_XQOk3bTIOhkf?&FQ%.@j^rS`O%vt,W T?rzGYeB6x,,0TV@o' );
define( 'NONCE_KEY',        'FEI9=Ziyn,eFKC7%a9>@[8]n~1S6NN##bijdn%T7soTYdXb$RQApb=AC:R1mUa-A' );
define( 'AUTH_SALT',        'a_a/isk!&3qS}>GuFGMDlNSS%/ 8SIK^Z@?k^FW~Dfz9J@SAt>Ik~u9w+CF-dQ| ' );
define( 'SECURE_AUTH_SALT', ')TOnBY3s*)y1MXFn^McF:*ih&E~00FiQM@:WNF(4GkKtfRd+{kuRVeD_IYVbu%:2' );
define( 'LOGGED_IN_SALT',   'D* {m0,_LIAeY(MW*+-JiB3{VTR=o 1x<BA?3c# j6<bG[VUA3LlOs}<6Z*y6yz*' );
define( 'NONCE_SALT',       '|aHx@&]H9m5#&Gf4{cZanYwU8;_<^su5z6<dT%~9_|xkoHIsi/@`aO~vP?6[$tz6' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ach_';

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
