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
define( 'DB_NAME', 'TestWordPres_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         'G-o0@g%k>cU@;0JY?/d8,R|E{X$:ig=.XBm,LH:lry7mH$Tam)kGz#0h?Kh*HCo@' );
define( 'SECURE_AUTH_KEY',  'vTcu4%PdW1(v!$7p6W*]ul-A9-q<C7-g/Z%5SAuy0|x*|S^<|c1tqpT/0[5nx/l+' );
define( 'LOGGED_IN_KEY',    '@76M:9i+OC-V!$kFn L,Biz*XSMs2$5aUjNW#C~=]sQ:AFW8-F] d&{]OHal> yp' );
define( 'NONCE_KEY',        'a8@g96v-WaR!K7O9O_/QQVv~<$g_HUjp02OBM&_71v#;tU9C:W|&UjkQ@rzy;we3' );
define( 'AUTH_SALT',        '9UUQiNr>%K4M)%+1+PR9s8{,eb*`D34noq+I2_HVfN=?Y,j?jt)$)[gbXOujHn*d' );
define( 'SECURE_AUTH_SALT', 'XUZVA_0x@t*tkUmBQ!S/m}U6yOB;N@-ZjpNq:x{]0Z.3JF=qv=P=eliL6~uZcPp]' );
define( 'LOGGED_IN_SALT',   '7hzLs#o /5_JGIlh`cM03kFyl1pgR+Jy5%_FH^J&Z#g,.9tTO;L$+>ROD2FmC3v$' );
define( 'NONCE_SALT',       '0L`]l|j;+2rZ@a0|G Q#K6CCy -`>|39p8E0WdE5KJ)..H++vB7[n2TpvQ?O?@Mx' );

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
