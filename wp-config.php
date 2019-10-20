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
define( 'DB_NAME', 'web-byrom' );

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
define( 'AUTH_KEY',         'jO,!*Z%Mi6.cBBT4^XsoWr6FJGanzKyt|f)uWt?j]hmW,7%OQ(|QwiLtn$N%L)?I' );
define( 'SECURE_AUTH_KEY',  '*uFhP119t}<#Mh*tZK(03SKjOOvj6iE/;Pun@/A3<`e$U|1Vd-|s+{}iVnxK8/<X' );
define( 'LOGGED_IN_KEY',    'Ip~Ml-mUz3YYP_g2pY.kP*`c{EHrGN.{TU^W?p3663eR[zx,:S.U<P^$ ?k9iODJ' );
define( 'NONCE_KEY',        'ImnAo*{U@a]y^CPi2ip*(wv#IE(laR7n]qv[UqgU2J2G}9$r{/~:S`65g,L4x>dc' );
define( 'AUTH_SALT',        '>hnL75eJ &Q5,IQrGm+5T}UvRP6_b%~x5IE8-B0XN u<O05dT|.mNkmncBnNZkk+' );
define( 'SECURE_AUTH_SALT', 'Q9cLT.kgG4L})J2)iZE~J|[ZRl4wZ|x,Z]-xCo-jk9l/~^2~W6;F:SaSQH4wO!D!' );
define( 'LOGGED_IN_SALT',   'AwPgXb)vfq3CEv]VAJC,9X^?0M3>[u4ePQVt$W}{M -]5[H<ghU?,riVQR}Z&rU0' );
define( 'NONCE_SALT',       '*Xe`2#1y&tS;MsAx](-Gh:yObt$95tvPb_7:lKf@Ki[8_MA3U1&@YsiBaGF2q]wE' );

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
