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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'dy@a:hsn#tuL(gP$;/+[29V;iO7DX?DT+oLwVmL5L.Mx5SrL` amBy[w !Tv(04B' );
define( 'SECURE_AUTH_KEY',  's}|E|IP,4<}/UIhl1SA`-wD?yoL![h,9:`PU,~wp?<wi,<*P|.@kYs1w!D=SL8:3' );
define( 'LOGGED_IN_KEY',    'W!2,@ &SM$8pO$B{AZKIgiuY >x2QbArUG47~zZlQNK:La)3i0/v2!b[JapTl3{<' );
define( 'NONCE_KEY',        '+FNT@4Da`t39[vvXn|k?Bej&tpGmm:|V[KJx*hsrXxxI>np6<o%|92X*R+oA(;Zj' );
define( 'AUTH_SALT',        'SacbnR=e*zYM3F9RTr&YFvu1i6izdb! ==lFj#f=QWqIS5c^447n<rFp>|eJbYR<' );
define( 'SECURE_AUTH_SALT', '<l!ePQ7 O3z5iFI^<Y!f+((D(utc7mx)*pIN~qbv5!Zr3z%q~o#aqkX<ueyX(|7F' );
define( 'LOGGED_IN_SALT',   ',Y1R7b>gZn^~}m_omJ ?qTn24<JS,T_Gm[Oft8C0gAUS[i>NzXx[An9[<Q;,3/4I' );
define( 'NONCE_SALT',       't/3&~~38  @]Zo+j-%fxaGjEJ)j&/x~Zs)eBP64<`5`k`o2vDJp#`jcN[@1pg@JO' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
