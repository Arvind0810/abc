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
define( 'DB_NAME', 'abc_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'password' );

/** Database hostname */
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
define( 'AUTH_KEY',         'Tmehe86h4H4XOY!OA{1todEEQh}aDvj*2|no1`4HDO1{=BwaBjgnZ,V}]R-_>FQ?' );
define( 'SECURE_AUTH_KEY',  'b*vY^b&e-$jmnoaW+ZNNa$t!cA8*)I}S)PC.`[t>_4@LRd1AtBvq7zMy~>ck*5wq' );
define( 'LOGGED_IN_KEY',    '>c{x,%WbW-nhYP/nw}B|6d?2jACf`WQg]H<TWvqUMoEhq%JZ8pw7O&A>dXskiax|' );
define( 'NONCE_KEY',        'xC=l3RGFlrgwfIIEC!<?Q1B+cX{BQr@Q-p]..`NxlDLGXZ~F#c{144brJt~<4Vo5' );
define( 'AUTH_SALT',        'O79<B)xF`%yKrj:_FbtX^2rZlKbSV`/CbK?}Q=Z3q p9BSJFIB)I|4:^ F@:`5gi' );
define( 'SECURE_AUTH_SALT', 'PBZ.I=c>0d,T<1-@Dq quF_KZ#S=gRA2DW2LqyYuNxiM_(n?S`jC=s|Ff+-QEBM!' );
define( 'LOGGED_IN_SALT',   '5+Dnu)XjB77/]6GN&>Xa%~l,Zx5Y^YJLZ8i(hMLZ*rv%F:%t*Ei~PNN]-E0X|DSz' );
define( 'NONCE_SALT',       '-|ov3+KNpk2aWWE=pV@>Xo,G::&;C*T$:XQ{+@]aO 7p~[]vZBO]Z>zD%PMhJj%D' );

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

@ini_set('upload_max_size' , '300K' );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
