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
define( 'DB_NAME', 'oldhotelproject' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'I87L8=t(<r|Jl_/<fQg6HSwIxQKfVu]5P[p@tl=xkjQ^qGnNV0j_ZAuQ<:o0+.P5' );
define( 'SECURE_AUTH_KEY',  'r0aS{]pi0ul6V,TA9e4s+[Nn+g`)tILngq&6&FUvC0t#/Lm#=gA#Rdl7z}2i?, %' );
define( 'LOGGED_IN_KEY',    ']&D?h~zQCD:aR|xm;:}m;/N18mO_FrFn.9c|MR+)5y.)4W1tpfEJlR:.kldgU6%X' );
define( 'NONCE_KEY',        'l/byQq]YsSTaHI*PYi`R]3Y>5sHmP=jo,y:rztMg?:[:UkzXFYT05/t37San9V=n' );
define( 'AUTH_SALT',        '?,lI`zFo1tbJ6UQ:<W{7mxUA6P%!n]F.I.uiwa,]p`oPNZ[BNtLz>jVbvAtb4pMS' );
define( 'SECURE_AUTH_SALT', 'b*H#mS[K@.ip$T7K`owLww{B:kU(S=om[S)3XCmDyQ]|;=K64<&g( FHc4wDN$jN' );
define( 'LOGGED_IN_SALT',   'zI~]u4c5xk}38D}Z);z6aIC5:w6ZiGG:VmI{7bZgIm#Q/3,F)_g~[L>S[+(Sn7]{' );
define( 'NONCE_SALT',       'QO*r)x|)|<OvXV|]s+Jj,FOUWRlOIHb]ches)D5!BLzk3;1_, s0eIK7l:C9e]0i' );

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
