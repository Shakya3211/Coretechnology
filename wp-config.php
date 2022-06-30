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
define( 'DB_NAME', 'core' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'r<LK|A=CQ~,||Ij0m$9VyQrfAy(a0F6wkauR?nw7&l7[)]u)&m9DZF)aj8Q;k6zf' );
define( 'SECURE_AUTH_KEY',  'Yi<O+1o$M!}JC4IfPB^utX hFT!o$J)L1KPw+sh)]!/(=Zc+h d:Y[jE{)(J!{-f' );
define( 'LOGGED_IN_KEY',    '<c2dPj^|=;3jy|loIsudJAI={WqT_l _|:E8B!9~U(DW}I%d4bCUcHPrDbT?^wPf' );
define( 'NONCE_KEY',        'q,c5@Q5pj/-x_gSy/2dG[+~(bQ<B4`q)OhT[}]g1=0(vr;UiU-Qi#_R9p59A--? ' );
define( 'AUTH_SALT',        '^.TFDF0t7Py .**WwGjvS qYnmT!]r[2<x)Cj3RSV@_]C%:#_H8iSi?b^7s,i9er' );
define( 'SECURE_AUTH_SALT', '&FL8]dWEC3B:!qi%e(S[l&+)]KiIIf!j7^p-E`2WLaA-!U!{pDk)@<|0>X7QG3Vq' );
define( 'LOGGED_IN_SALT',   '2.solziH6UTi=2ZoOT(+b+;Jfb]szlY@q*g<F>q$iA<5b?o=;^O7rgmbw,:86!L(' );
define( 'NONCE_SALT',       '?m}lTpNN)Em/#?y2SAH[MY+l&$Yw-`f-3R/|&CNhm&>fiJ5i[77eKsk*T&C/O{z&' );

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
