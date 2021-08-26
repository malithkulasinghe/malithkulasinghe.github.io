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
define( 'DB_NAME', 'wp-demo' );

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
define( 'AUTH_KEY',         'LB}D%je!i;pp-gyA.wi8?Z8GH611sp65O/VHIMW&lpW: (>Utb#!/FvT`/Wv:RQ@' );
define( 'SECURE_AUTH_KEY',  'iRR0 !Ngy`$i:A]TbgTb+~z=1j@R3X3}4n-5vvo;&ThH&Mz0?D+R`?ecnZ(;4|Bz' );
define( 'LOGGED_IN_KEY',    '!|rRu,{mGh}~4Em1jUw]Uya5ZPU=H1S^khLHN3gn<bvXM]zvw_w_:R,Q3|SKd_px' );
define( 'NONCE_KEY',        '&p6k5hApgNUmH)PGu:YbZ~k}WQmc^Nd79T^@ FkVHi8pabE,<68!.R<d`D90,Tn-' );
define( 'AUTH_SALT',        'zwIEdZRn3`vr7* #&5@>USY`D=9$4{XCAmW36)+Z2pqd(/|%HFC|arI./AF&}1 +' );
define( 'SECURE_AUTH_SALT', 'iP}Dfz11+Co[.GAg)nT` JD w~?QT7<:GLE*%W jjv%@]E$N:88u{w;2tB*,T.|~' );
define( 'LOGGED_IN_SALT',   'c/CG4k;l5r:+`g%oE*CFot5E(cjk#A+u<5t?P24e$%,VMIm!$z_empg+3/]q55Zn' );
define( 'NONCE_SALT',       '`ON+3-CJjx8_ V`HAN9/sy]5qGUavn,?~<cx&-9;9d5j}7?(kq}:R85bJuX+?Z}f' );

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
