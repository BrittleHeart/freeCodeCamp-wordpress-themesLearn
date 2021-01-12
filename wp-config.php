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
define( 'DB_NAME', 'freeCodeCamp_wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'AsDr@power6363' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'vrsh<km(YB|NsIQ;*m(a-[bt?=7VXDos8<%d3AyfM?4sc=%#uGej~y*7G&2~696s' );
define( 'SECURE_AUTH_KEY',  'H6z5_`RS L6pKC8> Y1Iz,GQIBuGyEc/QRGSaj&8q9t>VeD/K$y?y(Vxwb7m_.j0' );
define( 'LOGGED_IN_KEY',    '9Y}EZGEOhQLn2$Rv~n>bS6yl$K/e+z|$38l>7A/fvlxc|q?/>ZLB95WDci775@fJ' );
define( 'NONCE_KEY',        'Ij}g45Hq((@n@/k.?WC_~C=<4prQRQ$4-VRl,sN;tP|8Fkm+l&HVLK69fF&2_<Ws' );
define( 'AUTH_SALT',        '386!?2XLl8;+PJFAl7=r(gY`)=,nOH&>md_cwt__s;.3BT|yBB7Z^7LDP|_j^G^K' );
define( 'SECURE_AUTH_SALT', 'DOxaH0*o YmPcR~V)PPDUF{1{dwv4;xh?htna5wVWiH3tGwRb:MD;__rG+GIg{8>' );
define( 'LOGGED_IN_SALT',   'm.>Ktg0X~:}|q+AL3c{m%Uje-5iiSsKrhsBdiiGX?s+;q6-G61zQRG{0OG*qZHLY' );
define( 'NONCE_SALT',       'EV3l>L{4]%?6HX9~!-.P>6.x_e0$r`f?vtO5UN~ !MO/Eh-d#EEgvq$Z^uA`u6ec' );

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
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
