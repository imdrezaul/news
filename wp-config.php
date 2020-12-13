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
define( 'DB_NAME', 'news' );

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
define( 'AUTH_KEY',         '()#m0!>$S5M<clOx4_+hCSb+z2oXF{jpO9vG{-1.%o<fT w+Z.:j5RT?b[%-IFO5' );
define( 'SECURE_AUTH_KEY',  'c*0czK-KbL8(Qz#*7j6nkVbbUwm.gecj:U)jXnGkAtsd~5j36MVb3S0I#(:#ESH-' );
define( 'LOGGED_IN_KEY',    'wEH|T4RNxQ,aU(bQ4%@T@hcHl?9(a^!0GejOmm*~KO`3|[],[T8GTdN=mm}.6;>#' );
define( 'NONCE_KEY',        '`7XQ~4hvsvprfNx?:.5bv]eLsU/K,Jh$K8Eux98>p:qjkc9GW%Gt#OQv698gYw2 ' );
define( 'AUTH_SALT',        'Lu@NZ#)voGgFj4DJxf_<cqn!U]j1Faviq/bj/z*oE<sfAZgZ4TM&2ql`,~hE&u]e' );
define( 'SECURE_AUTH_SALT', 'xls`OhGOtW6M(!vL_,gT8?{{CN|b.A@9a?i7=d%23_bL&2{+dG-5s!]B{(b$#s6Z' );
define( 'LOGGED_IN_SALT',   ']+e]4o0.X L[$@o)B~}EemDtyB,;YX2(F;%|%4{oj~,2(.*8vhd!1j==@2H+b^:o' );
define( 'NONCE_SALT',       'G:3rk?1b+mdS6Qpox/GXu:QM]@tTu? <:&!WDE@Do|N%8zdW!L1,jo**@r6;lV~S' );

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
