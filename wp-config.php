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
define( 'DB_NAME', 'pbajra_portfolio' );

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
define( 'AUTH_KEY',         'M{0If%yt>(8/PM?G@u*xGs=X(bw: Me:|;A4=SG~E#shq;Ll:l$2P77FWy A(|qc' );
define( 'SECURE_AUTH_KEY',  '*Sx7}ZDH5o915#GR D#q+io:}7}|=}!x]Z>h,M,z}1;6v%!ayaGh[btZZBx)o_UH' );
define( 'LOGGED_IN_KEY',    '$)8@V@22:7w0ijeN/YX&:De-tj!ey5C9LNtd8OJ}^xr;S/r2V-d)YK~`]2t+-2=(' );
define( 'NONCE_KEY',        '*`=1m L0=<v7@N~sexFzwtlB!/~4w2wvIA%^&PC0|OL+26tNEB$,mC`q<3[tVB=T' );
define( 'AUTH_SALT',        '/+GHm!VMA40H8AP),>us~lA#0Y`dmVsd(OGH;L@8~>ul.Mbanm(A_jM3*?|K,0yz' );
define( 'SECURE_AUTH_SALT', 'eYj_Q?K~(z`QO}~2z:sDDR:74^A_`Vi&q$DL_N0iMU>eucc#F)NKn?IH?oBKoI8^' );
define( 'LOGGED_IN_SALT',   '%x,wMA)sz[8?2x~2DayGVK?:1d_S,rQE5yztM&Ei4Xciu9.H)eMYuo]wo%v]nIFX' );
define( 'NONCE_SALT',       'hwg68e/]Oo}K<1A6oJjl.Uz0]<%@wtqbeUot{;C9R:OG3*^t>>=`$UInzOTPYe/z' );

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
