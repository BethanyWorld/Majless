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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'majless11_blog' );

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
define( 'AUTH_KEY',         '$G:Gyv?q.E5&tE7>fKtmAPgpcQ+><]1r)K:Y9~{BLnt3EPW>W4}U#2]T-)=DDZ]I' );
define( 'SECURE_AUTH_KEY',  '1Ez+fctIMRLf)2MJp:PI*qn~.<G6r`3./;vBHm{%>5Ze6Y,`ab_e*:1|<m2/x0SH' );
define( 'LOGGED_IN_KEY',    '1XJ5QA)Y5-b}yib-dyH2&)WomR,4!$ac;F0kX;x*29WHS2Rg{mI:,I44gk{V0dsg' );
define( 'NONCE_KEY',        '&$Z!kIT4+Z4-#Jk#vA9ew;YC#R^]E@Y|ss|GyR^{i!1uC`[9+ 6rP/DjNkFuxQKV' );
define( 'AUTH_SALT',        '5ypI<%]+[<ic:0xYeno(i%R|zw^d!};EBLU}EP6_XToT*Sk$} |;sSqvANXAtw9(' );
define( 'SECURE_AUTH_SALT', '64-R(j#*k*3[|`>?UCCbY@J>tgs|dp;e?1P2|a}71tmQb(q{Tz_n1,r!BOI^jZ=E' );
define( 'LOGGED_IN_SALT',   '69hzl^R_ihcXwBIYltXS&_US|jQKf[WGs @RK$0uXizp1tY/=H3>l=m8x{E<*gi*' );
define( 'NONCE_SALT',       'KC9u}V:Xk)tR51>k7O[)J7G,D)LxS8.oE^>E5wYs#g{esm~nmcn!>0^XNmHa.xh|' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
