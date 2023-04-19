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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );
define('WP_HOME', 'http://localhost/word');
define('WP_SITEURL', 'http://localhost/word');
/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'flrL#q8KZua4cU;@5-;@Q[flg&S>K;Xyq[e>Fn``X;<QBeEfdl_VHSnfUyH*l(57' );
define( 'SECURE_AUTH_KEY',   'a#Qj;K1jynN0dliYnyEk_NjmTnVOKKtWbpuyKo^7K7s[MIgtx#q@s%0ioS%q2bAg' );
define( 'LOGGED_IN_KEY',     'uBS;ho%0O-h8A6rL.2>RG35a?C0|+x)HKO.{dtyi~pwP[m5j79Vv}_|at^YDD$0=' );
define( 'NONCE_KEY',         'nP?`qocm>&@b9jh5q BeW#BhzIj/WJT[zngc4@@K(LSN9,Bg/B68|V@yd>vxCK[S' );
define( 'AUTH_SALT',         'f1(k[NN(ftr$s}|z$dt%$H!*PyUZr9&Z<pB3xTv$Jv.j:UBZm>}gy(8-02zLTfDU' );
define( 'SECURE_AUTH_SALT',  ' k6MeINfPd~S)PuqJa,CDSVLqDbZ(?}nWUO^P;<[xdR%HJv7.SuL0?3k8qJ}jrZ$' );
define( 'LOGGED_IN_SALT',    '(%8KsSBvCyU>$XBcBRKB8baJ[$^ZF?eS2kfiV#lhjRg)~PO|RupV!X4%99,=y)E|' );
define( 'NONCE_SALT',        'WC@FGe=ULm*tYsB3~oI(AiJ5^HkC,9!53#m_=HmIJx50aQy#AkHPs,AH=9Gx<cz1' );
define( 'WP_CACHE_KEY_SALT', 'E83{_u45#e6*.P|wcKHNM.PvI4#}t[?~X0DM::z?o5{,[63BF2xZQ@v7Iu]^1)sc' );

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
