<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'rs' );

/** Database username */
define( 'DB_USER', 'ecwerpuser' );

/** Database password */
define( 'DB_PASSWORD', 'VEGAS-BABY-VEGAS-$$$-BABY' );

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
define( 'AUTH_KEY',         'E<_}2Hlf;6GmA9CaFbMEc)J$q;?DgQ`K6$[E!PPxI<AR$z8b0X65?Vys=oLt~VrC' );
define( 'SECURE_AUTH_KEY',  ',MOJ9?5gf5wI[Q<!3qt[%nq?z_@WO|y )_H{_uKNs4T9B>IRgfxTmT7JsH}ZQYfP' );
define( 'LOGGED_IN_KEY',    ':oz]}^;1Qv )5brg3TgM!{bZ7![*lgj~?awmsY`*!%EpmWI%QXWV~6xtny[<wYf9' );
define( 'NONCE_KEY',        'S^P(JVcxd%@+AL=(z=])1*]gtML_Oh~#W+&^bH*H`EY9k0x:lf.?vc6*luvX/6b=' );
define( 'AUTH_SALT',        'S5N)c>,uvF=*[NO#!%5i6,g G6L[zO]4ReZg(u.V(.u-knN,A(ZThS^;{x_ iOBl' );
define( 'SECURE_AUTH_SALT', '5G #^8*5>QzldI!SD^Qn2Y2<e%;K%<>h@8}wPu&WV<b2g-<f~?!xfJ;%4-DOYL?R' );
define( 'LOGGED_IN_SALT',   'e>`49EecA2_9U=BC,J1RxsACL)Uy/@&Hs;6F]e}Gb3 s3#rV$b:B5v(~Zv #D>MA' );
define( 'NONCE_SALT',       'S@),n%_cs2J(;yMY10XHQAuCF5b~Bx2=K2:+,{pz{TIC03 8%2Qonn=?}HSqq(9I' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
