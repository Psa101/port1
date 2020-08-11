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
define( 'DB_NAME', 'port1_db' );

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
define( 'AUTH_KEY',         'n_1!QOmXE$a.(5F}B3Yv*n!ssm+=d^y1J+T,8YXK|)H:ATt+jiaxFpzo,2`*Jww$' );
define( 'SECURE_AUTH_KEY',  '/-V%lD=LEu},*,b0ru_AGQ:r:UEKg0z9t*)0|6ubx^-@:mh=}MB2#$xlyt`AYLHY' );
define( 'LOGGED_IN_KEY',    'DIawv74-m6q6<=I1s7c`lw}*)i:b33H}Bg!Fj+k^AQIZZh?22<)[mTI#t0ea{UmI' );
define( 'NONCE_KEY',        '&6jC-YQ^bz `mT g#UzHK{Y%|7:>rHd?K)73HS+sQ{t>gak{DcsA* /z*Tknfa-t' );
define( 'AUTH_SALT',        '%)P>*&{]5UhN;f4#l&K7CERNl1rfdXkMK5HPHrF3Z1jxtzk*^J|~PaOZLl*K{rO`' );
define( 'SECURE_AUTH_SALT', 'u+6;<gA_uv^&k&9gX,(Fm<r[:)CTEHKartvmAYIm!U[s*^sW#HJczQSzyng6HpK9' );
define( 'LOGGED_IN_SALT',   '$m@AKM`!idRbE*jY<]P+=GM8*sa=0j58t?C2?OL.ul!&A=*O2*2a9b7PsLEGD;n~' );
define( 'NONCE_SALT',       'R%eVeB,AEO{_g!RyU[>0ZFy*^[:*pg62=xnaP26eFhU|lH;<pd>BC$BS-Bc|mIug' );

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
