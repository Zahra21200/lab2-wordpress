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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'iti_store' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1:3307' );

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
define( 'AUTH_KEY',         '.Xy2[$4@s9!K_Y,37/:ZJL00g; mJFfGT*DOv+}$#p)xz7vGf+]$9<n7n||=0Mmm' );
define( 'SECURE_AUTH_KEY',  'g64{/$KQ+lb+FA3,6LG.o4-[1%cPjT}EG*(FaEjH.$[lo2/jH5/d#)QyVxdLWsiq' );
define( 'LOGGED_IN_KEY',    'Vz4[Hxne|#?Y<Z_VV4mu+Ir5{7f:w|Z{L-pMhnE=Dj-aQG0u]<A-i?Pi&X^@P.mz' );
define( 'NONCE_KEY',        'Y<uI1vj_3DfzJ1G @+t8$^1dq#f9/.JRmo2XR:uQ>5m)u?GIyqzpfNp16LenR`b:' );
define( 'AUTH_SALT',        'luN>k:Iv`8 +|!z7mFmpxhj7k}UOC{zpkEz9K35dfVk7fhwmNKD2Lug6jLnzoPYc' );
define( 'SECURE_AUTH_SALT', 'AM43pPCu4;%G`4PY4V _5Pc8ZGj 4j^(BD{24`(v5Zzn~g9(]o^U0M6~qwCQ<OOy' );
define( 'LOGGED_IN_SALT',   '`km()n&*F.sclRvk10%)]?l`[Y4[t#`Dz?pK7`JU}n`Z3{{q?b:@-gk4_C51&3Sk' );
define( 'NONCE_SALT',       'B1O =_X`Q8:!$QZ`D[ZBRW%V{4KikcJT?L|E!(N/H8-:6QVea( Dv|_Uhk/r#Yj@' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'store_';

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
