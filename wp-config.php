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

// Database for Hosting
define( 'DB_NAME', 'isoglass65df_db' );
define( 'DB_USER', 'isoglass65df_admin' );
define( 'DB_PASSWORD', 'iSGlass09980@iso' );

// Database for Localhost
// define( 'DB_NAME', 'isoglass' );
// define( 'DB_USER', 'root' );
// define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         '-J7eVwSue1R%QS=wv/%PpfiJ:2y}Y2HiC7?u*B@q:3 lWVw|Zs`Q*J5:O9ltW yE' );
define( 'SECURE_AUTH_KEY',  'SMQ!z?$@0|t9^eym*tiS]Jy)M~tb,$*UoIty?ZZ2lO(@V_jsRv&nv`<l1_?#kgc>' );
define( 'LOGGED_IN_KEY',    'Kl}cd{[FgwrmxG0UT Yke!Br-/(iV14;1|1Dkf)zyG Cz1k)djG!XU|>;lSY$Y,z' );
define( 'NONCE_KEY',        '@9rkxOl{|1.=4F[|KDxeebOu78V3c|K`ZnR0@92*:)7XQtBn gp>mHG%>>F(z~09' );
define( 'AUTH_SALT',        'kRD3,V>Bu%;MKA4S-~&|)n qP_LZTUF[;GyB8s&)#+t;$%hs`JZ>|zyWD{weE9xO' );
define( 'SECURE_AUTH_SALT', '/0Qi5N=AH2G41|Kulh;fTV%~:})$H.7]a(JNub^8EG3:r[4cB(LSK-VMPxtb/.x{' );
define( 'LOGGED_IN_SALT',   ')_`EjUr&18rgj(vK,i}KW)f:D%gQAFoH2e&1fQQ{Qd*b^2XkW)dh(K&?X0d`*OWo' );
define( 'NONCE_SALT',       'aYX4u^y6|Ku$36.:E>L5U~.}d:=.f#%k?`{SeII#{R=X9&>7EgEtNnh@wBMwVF3r' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'isolc_';

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
define( 'WP_DEBUG', true );
define('WP_POST_REVISIONS', 2);

/* Add any custom values between this line and the "stop editing" line. */
define( 'WP_DEBUG_DISPLAY', false );
define( 'WP_AUTO_UPDATE_CORE', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';