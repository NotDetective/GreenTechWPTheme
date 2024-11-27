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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'P$:TNTj:qAdT@td:eM`)5gl$._bO1!az0TuGlowZkc=G<01F(U@[!`bQ,<*y!3;S' );
define( 'SECURE_AUTH_KEY',   '>9+8Y^*{.J_Bs!8T&IER-ZiDNS9o*9S<^<6]XHNWUCi9qiOn)m/Ftc;[,$7.)Ma5' );
define( 'LOGGED_IN_KEY',     '`?wI{+pETW3@&m_.t2&I@Q,zj$}){_G2hpM7C;s*c>q5|6)n/KrR;:oD#ScrJLHK' );
define( 'NONCE_KEY',         ',Uk8z/EG`:9K7p>ZS}0M7~-,[,g)0IJ[(5,{ZG7/SL4XBVS_lT6sKaBug(*p6)Jp' );
define( 'AUTH_SALT',         '[2|uwLOjraU(xKhVF:G7yM7n`}v:LE{$Bw1<K6o$sTywgS:GfO&!(+te=J.iaRb,' );
define( 'SECURE_AUTH_SALT',  ')L$e)&0b !uSJK2rK2IJ^S:`PdlVNe7OKal72*@M>u%F6TFKX~@WfH4sW^jvN1zp' );
define( 'LOGGED_IN_SALT',    'G<7jw#oLK}gCzEtHZ)?~#Bcl,Ux(%jvpRg1=xIM(0]J9&ToRgl&q91%%)G(OPi)A' );
define( 'NONCE_SALT',        'PUaq>nuKBWctPDaLa>gpkTZ %q1RXL[$-D]rU!rE:(:w5.4zcP$b?*h4^0R7zsBl' );
define( 'WP_CACHE_KEY_SALT', 'rn.5,+W3~SlBh~~hC9TaoO3y[.5_9Oes;9 ]kiI_-Tv}cD2&%Yz*NkWVsO:?Y,bh' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
