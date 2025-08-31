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
define( 'AUTH_KEY',         'aQ&R!mtbvlx[Ec. wh9`Uo~<gh]BV|*IDM.NyEl2 XbyCp!sB}Oxx]Mjj?Yl*4?.' );
define( 'SECURE_AUTH_KEY',  '`r.7G*|oZO3vbB=e~|emu7$iuH+ScI+pj(OOqCPewk$IGbgUfgO2U_&|%|+Fro{t' );
define( 'LOGGED_IN_KEY',    '>*[k0F68oqsF9g$*nw}3^>`cg%8fu%58`CPJdPLnA&?Q(e*}A7~8}q>r%UMks9c[' );
define( 'NONCE_KEY',        'w2{:dU~W2?OTmyV|`]Yu%wW6>(|-!^;O]QNYX3xyDMrnkp<xCel>%;sBAmp7PXpe' );
define( 'AUTH_SALT',        'a+`,[H2_bbDg8kd%iz<YSymB&yyt <ljI5?j=EPn.WN/Xuz[|T`#$S*$0~`L!Xl}' );
define( 'SECURE_AUTH_SALT', '~[H6hjuh?b}R:LPq|_9}n>wnvK7S^g}9c/JG^InNMm6?>.ba7gxOxqY_:c| ZMsO' );
define( 'LOGGED_IN_SALT',   '*te*H5rmd0012VjC24,9*=0OmQ_#?{wfXPw_S|?Uyxl3A.d@UJ kJ]+0%7NgzGkn' );
define( 'NONCE_SALT',       ',;uihCbePI>zj1v6vG9#$0Er_@$dqA&XU>JJir5xPF3ZNDq!3mW&3`0&TFPW5>h2' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
