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
define( 'DB_NAME', 'moi-truong' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'mysql' );

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
define( 'AUTH_KEY',         '<Di1.L%l/g-i?qF3gI `Hg to]^rngDN]>Jbru:MWNjgQjb0Gh67CI6L<3!m5D>.' );
define( 'SECURE_AUTH_KEY',  'B*^)SkKj=7zumgOBH3Zu{4lu2@G#Kat][]f&&&srzBp-4.Y_8<{YGvojBb9|yBRg' );
define( 'LOGGED_IN_KEY',    'fJHe5tRp+ Z^,EqY-1y7b?/*7LG-o?sspCn;3gDX20=,qmQ[,)K;wtOm^gTS]Z0z' );
define( 'NONCE_KEY',        'GM]z9rq/Q3]$g+.8&KA(+t&YkZ)qNKpC^84aJ/)l.Z .}-T=.:?J,_(z&d/,]2~a' );
define( 'AUTH_SALT',        '6Ihxr~w0pTp0cJ3Ix>@ O3h[NsNgGU&IW NU[V)hY|VW3T6Y`L>>p%/}}`qB4n|W' );
define( 'SECURE_AUTH_SALT', 'jl7-jkY*`v<H8NTO/ xa$ePc2g9o_?6KvlXi|<;#k-|WU&((] ~zoi1n}fN|k,F(' );
define( 'LOGGED_IN_SALT',   'z>j*r@l?_#[jA0JFM~C0~u$o/|ajxKJEFn;c}b)cd{1(0m$l;Ute*Kq?}q`S:p7$' );
define( 'NONCE_SALT',       '6 tANA3=W 5F]FV1$h^BEClv.J(*Q/ZFW<6B/OXXOubMvMwH$o*KnBYC{?1g9UY`' );

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
