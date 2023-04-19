<?php
define('WP_CACHE', true);
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
define( 'DB_NAME', 'u838297946_appbaapau' );

/** MySQL database username */
define( 'DB_USER', 'u838297946_appbaapau' );

/** MySQL database password */
define( 'DB_PASSWORD', 'ZAQcde896)(*' );

/** MySQL hostname */
define( 'DB_HOST', 'mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '=f3,hQhy$:+hT-k1m6WI*JjFh?OPa!|#0~d(nB.rvrh=Kx2T#(8[uz zZ-$l<Ggf' );
define( 'SECURE_AUTH_KEY',   '->Md*`>s[|N_a[`vMMcH FXWxZX`uYEXUiW$m$ag[=MF6),91f3rOMtgWIz=Q%_O' );
define( 'LOGGED_IN_KEY',     'bIpAO(Q&&GSP<$mfzBi95zOkvCp| #V`vlP2:wHSIDMnhSDcH<eEA]h?DF*[W7!W' );
define( 'NONCE_KEY',         'qB)Q2y~5v:`BcQ)3r:otlJLR>AH<A22&kbQE+mm9o2w8Ba$tPIC8Y@rM=U(7jTv-' );
define( 'AUTH_SALT',         'o9e~.5)sD^<4SHCfWQ9V.r7.{kg0)>t1f7dEUiqHAjVe3 $0}_61 fE9Z,=LWZAm' );
define( 'SECURE_AUTH_SALT',  'mHR)i42ES:snC)5>&Lz1)Bw)$Dhz&+.aa<8~`%>(`U6B&1=+CcTUbqUr8doz$mfW' );
define( 'LOGGED_IN_SALT',    'X3(^DGy127Aab.3E@%TI~cSiXMFgp2K*85+,5LKvW&jKE(j00^|S;#;g+*iiDU6E' );
define( 'NONCE_SALT',        ')v,6ylb#UD@zkV?jDR{mG0_B*vE|{a!Kt:Pzd5t3p|>uSeN{ne7ScjKC=[.?0:])' );
define( 'WP_CACHE_KEY_SALT', 'j2M5V(fWy..R)+-9g%4FBR$FQ.1kUgUE^3FPsNT<|f w{EEilR@GIhCIdz/PyIOc' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




define( 'FS_METHOD', 'direct' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
