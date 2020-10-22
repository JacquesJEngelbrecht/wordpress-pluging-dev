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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp-plugins' );

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
define( 'AUTH_KEY',         's[2 ZBl>Ex<@fW8`N}N Ff {XQ+vJ+MBzaZzYC^[]e(Cua&%N.ax<#wK2`;8b0u6' );
define( 'SECURE_AUTH_KEY',  ';pv]Ps|,< h !<q|ei;?-dm!u=`_lP,>o3^IDrsWDt+6lcKJ4V&D%DfF?Fe5~cQD' );
define( 'LOGGED_IN_KEY',    '  FilJn.,bV/n=BzIA{#u]wQYxY54,F|Coy]]PILW=$F^M}R=O_;8h#)1U)e *I}' );
define( 'NONCE_KEY',        'ld})b~XD#CS0uV7^9!ZCT:[fz u{[QJ*h]v869uppD[d8I-x;vbG9$3V(h ^S{%5' );
define( 'AUTH_SALT',        'S1n,xH[}+fys#P,D9vBe|[6v|D1C:,H4}OJ]L:To@)J`hO9D=R8kng1,cO`~~bv#' );
define( 'SECURE_AUTH_SALT', '&OFk2S)}F8w9iKr8#{f<Eujq#Mq! (pqK)bo6pNrt`US^YVRyb7SoOyOkS--$=(t' );
define( 'LOGGED_IN_SALT',   ';*v+RAc:l@J~UBW)hUrj#=_Al+7kmzv/]6psNLw01^${:=ny-wisM?n.hdL>BlQx' );
define( 'NONCE_SALT',       '9|ZsGYt^w}3c0]6VP4mySaGJL@wzT)-{Isij<O*e[AVh;F0lHYxJ1=W$(Y!gt(;(' );

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
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
