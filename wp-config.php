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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpressgrup' );

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
define( 'AUTH_KEY',         's4z<pH8gHqD$8t}8`Mxj!qq 6F@<g,mt ;RI`@XQDp@Pm=/I>@2WEU7KU9;lv9^R' );
define( 'SECURE_AUTH_KEY',  '%1(Vj|QGo%Dd7-fsm/AQnUMh;(>_K7Lyq S+[#/)IT3Ycing5G8tZoI,&>~eFS2S' );
define( 'LOGGED_IN_KEY',    ')^S=m/ogo=|5{j-B(NeS|FPVnh<YF<~ &Jv,VI:+-d$6bhs-3.2dO<u!?:V>!^XT' );
define( 'NONCE_KEY',        'y-mF$&(mkQRKPe<n?xm<Dt<R:UTeBgBN2Yr#N8AQedk]7qm+]1xFFeQ$Ax*Qa#5f' );
define( 'AUTH_SALT',        '*Qrbqun*t/qnW,vJ-jlxl?^d4GOnSkSQ?T~!,_z5{?>jGMbGdr[[Yk)`f1[+nS(/' );
define( 'SECURE_AUTH_SALT', ';z-cz/eiG/3l^^p,hE7&LMy^A9nrcW,;rBI7t1VKk_kh?kVnD771lOmn0 b~5a#&' );
define( 'LOGGED_IN_SALT',   'sgF?mJc_}VHn>j&D-@^on_cz|)WfSB|!Dd3gv4Boc@0?,n[x=0E=qhF&D$WNly>z' );
define( 'NONCE_SALT',       'h8zTZJ?({6SLA=(C3.cVPO4!!;0`~}NwZvCY)r|;?k-+[x/^ x?hDwTZj ?ziugp' );

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
