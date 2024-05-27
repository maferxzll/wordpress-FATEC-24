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
define( 'AUTH_KEY',         '%-Um^jfv)3($uV{]I%U8yzR`,E^C2gs(Wsl1>|k-ioWaxa?a|}vy.LJpLE!u}(08' );
define( 'SECURE_AUTH_KEY',  'qrjS+T? W~Zz(NFu2C8?5WwkB1tm|5&.[/k]`i{_}S6De_t9nIWZw!zu/~j)>pzm' );
define( 'LOGGED_IN_KEY',    '`Qo?R9stPGfoe&>$g8CmGxsBPxWibOW7mzUq8,WYCX)>2 =#J4sxqs/eb,YSjzHX' );
define( 'NONCE_KEY',        'jX,_(qOmN`[;)LP;ST7D;Ru2@EKHC~8;t!ot @gl}|<El)FZ+lr u47%zlC,|*H;' );
define( 'AUTH_SALT',        'AYz$&m~<DXNec`4To+!mEvChBo&7hKMAZPyFkz+9T<OXtzAFc,~}m:t#)4CUl53b' );
define( 'SECURE_AUTH_SALT', 'C_S|o9o];uOI,NThe^yu^:;|?a=Bad|.<9^p/.z9:3Lv/qfz2(4,,L$S)m@]8Yu{' );
define( 'LOGGED_IN_SALT',   'jmT?I_Xox]3f=Z1g{CXTYjxVQd32&5L7p;C0Mh3?;|=>o[!eSH&*zV`0_@qt6$<!' );
define( 'NONCE_SALT',       'kwi@(5&se?OkcakT)eiiG.yDa>hu21:y_$00.D22H,q9?p5vWUcg]#fU20l[Maak' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'tb_';

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
