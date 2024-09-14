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
define( 'DB_NAME', 'gymfitness' );

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
define( 'AUTH_KEY',         'T`9qft`Wm<CI/93L7a8oaYQK:V8%s2<m>)DFm0iZg#OH/ <_}F_,|o?b|l(ioQLH' );
define( 'SECURE_AUTH_KEY',  '98Lw>J@s[/]riW2dVblB8cORtLeWq`/{]E{zT*u[`3Tq<n BPsJT(`GP`hhZ}CQa' );
define( 'LOGGED_IN_KEY',    '/jB$?NfT/.1Sn?f(.-VUusg7: &>0z+:BD:*Q=3VI->ya[fk`J+m0Z;)>.(!Iur#' );
define( 'NONCE_KEY',        'Nay_NaWP$c/Jeb!%nS<5DK:KOjmet>$g`J%Wa+2CN(KFyvv0SS`6QSSq[<kCEYJ6' );
define( 'AUTH_SALT',        'G2V8T&>ntL3(i[lUD_,=OR4T*9tvw=)T<+HEd5(hs<w./+?0b5F!)><Al#{gAMe+' );
define( 'SECURE_AUTH_SALT', 'Vi&X=62SWfk~!T4*SW~UL[V?*1gux5.@5lw%#|`Y4IU8A{h*S}}vU>MQ^+n8mg7j' );
define( 'LOGGED_IN_SALT',   '~V_$*^?doYNe:7#{L*)e>V(?90e9=/OZARSb3w_Zm4`dcw*`X%c{s.B9`xnoi4$d' );
define( 'NONCE_SALT',       'R$>:%/<p6it]x/Nz|~y`JI_^gQ25rKa&q8+TnvO]c0I7EMc(9-!<tl1>E*xs >#Y' );

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
