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
define( 'AUTH_KEY',         'Y%/opJElY2mN<;X$W&[gL1AGy,!+EnbA6ls#1Hw6JkF?wq{SRbLBRtgK&fY,!*Hg' );
define( 'SECURE_AUTH_KEY',  '&8h-~W,^?M+T>wb&e]PEqKQj+f|=m63Casds4Y|RkG^u.^#)EV[hF,Jp<fj-dX|E' );
define( 'LOGGED_IN_KEY',    'K4Xi!BM<WedekND!PjH%p*hSIJ6SUF}DrrA_, |fQLi([3_)$@Npc?OGs%riE5q3' );
define( 'NONCE_KEY',        'FfL-)>CP@09m vCg)cO_Ncx=~?*-xT/NWh*OBp#]f;Z8KQM$+P*1 OW%kZanJXe.' );
define( 'AUTH_SALT',        'We~7@c@phV}RTp8M>X]egy=:S07@9 $c~%E7UcP1.6|`)w>c<#5#WyxLWQ4<G:&3' );
define( 'SECURE_AUTH_SALT', 'm}1;#{f.2qgB#oc0]zjtq.j#*Y?$c^)g~S]2-zgNJdYw /w4nc{3x?!vqRAh8)>I' );
define( 'LOGGED_IN_SALT',   'R>~x`&Q/M>@|SE9r$;Cb/>DlnLdow&`q]^[sp$A5n7U5R%4)p!-w$D*.v)~w>BZ%' );
define( 'NONCE_SALT',       '^Ph+/t#[l{DBhDV+Z]$O3d#qd^@]tG$g*IiB0x<ix:qOUH{G[66ve-nw94Vv!j$`' );

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
