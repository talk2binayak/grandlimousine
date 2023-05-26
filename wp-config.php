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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'grandlimousine' );

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
define( 'AUTH_KEY',         'O)i,=]_@+~}*/*$rxe 96/R6~yWU]/`LHK&&#F]Ga`^#s.<`~x)p{_u*yR$Yh[GP' );
define( 'SECURE_AUTH_KEY',  '_u4JkpGN`g<#.qDp=?)]yD6cAV<RzB)PE/Blp2L>-QZvCv:a5&VlJdxI`1kNs1iE' );
define( 'LOGGED_IN_KEY',    '~L;N>wD:uHN/%FQpM9p9$cIE9xZM(54gd<&f%p-%$9Vr0D5?vf9[!8/F:(`rLMaX' );
define( 'NONCE_KEY',        'HeN^u9wK$@I*kU^702`P9S,{|JJ3j9$|oblBrdq#f3&V2}m6<s4.3aD{O)ty3{Qy' );
define( 'AUTH_SALT',        '!AzLdAkWnAV7L>{3W0DsH+tW<.[Sb3G7>q`F5VWS)TZ]Thgak&%2YATQ_#0dhN(B' );
define( 'SECURE_AUTH_SALT', '>c{]]yG3IED_QHrbP+Wf}L7v{OXPXOPY[`15x8s$X^ queqfJ]#D7bzcv:MO8F5@' );
define( 'LOGGED_IN_SALT',   'J;EkVrRtwfF[$(rIXx(oy-aAW=(h(o{Gqyh=13!TyrXH$KrhG8Zdw)[$/-5c$Vc ' );
define( 'NONCE_SALT',       '0)2oa7*o!kHc4It|oxInI9y0qLqu+1>MYb {!T=Q1H#_TW&`*l;oR$SQ9u;F7)8A' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
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
