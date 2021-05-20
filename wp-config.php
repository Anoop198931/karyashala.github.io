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
define( 'DB_NAME', 'karyashala' );

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
define( 'AUTH_KEY',         'M*%!%sj=%[pLbYkI$ar*OoHuw ~01b,x./V-)H`:42KgB0cwi3C7Xu9lqgbE!gv*' );
define( 'SECURE_AUTH_KEY',  '&5APR)%PFU!tzGb;/x;J(a<vqv< v3%[U-{!~eWe!0xe(>*[(YXhOzzn6}Nz&GOC' );
define( 'LOGGED_IN_KEY',    '$?$zX(u`]4wS1>{x@jzB[s);>]kw$1*1d/nYha,/j!x/n@uY&c*MC!>:}4YJI&Z4' );
define( 'NONCE_KEY',        'zsOcGkv|?D*~5FbM~a(U[p-R-,7JFq^y!P;Z7Oj^{~z9Ow#j3L`[PII9b_taS9aX' );
define( 'AUTH_SALT',        'W8gZ3FY4p2V+EAHE}`{S9Y`8W{BXYBlxw[u:) qT4 ~Ee oGOVSU}l$.FZ*O;_8{' );
define( 'SECURE_AUTH_SALT', ',=&#uIv{X{e;%aGf0,R&m]4i~GaKL`{.2`-.<C&sUU:ha|/:qh(+tns4=cfXXG|h' );
define( 'LOGGED_IN_SALT',   '$@4YV@s!M!yEF!O|N 2jc2Hre~F$wl{Aay1]WB2b% S|>jndUlQVy86=RUT^ txO' );
define( 'NONCE_SALT',       'hK[P-vRzxU5Ju:(7F5 IDngGZOikG9i,bOHQ]t&l6nV:RPEG[#6m~jr?b.ox;q<p' );

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
