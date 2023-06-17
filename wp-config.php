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
define( 'DB_NAME', 'bt' );

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
define( 'AUTH_KEY',         'PVtLOpZXM~|>&tF>m2ouD%$D#0(tb?JXks.~ETr0qBee|?& YY=To*+3TQ^%GM)P' );
define( 'SECURE_AUTH_KEY',  'C_RD!T8WPDV5)24<|?1-#K._DMx09zB$@ux`md%|F?53Sap*iibpSJN5*pOl(* $' );
define( 'LOGGED_IN_KEY',    'JSCA@k<r ]L:,)~Nx{k!!,mfU4z-Dn 2|kQ5nCqSa/ SPP/;LsMV}DJcG`g;Tjv<' );
define( 'NONCE_KEY',        'dE%<RAwS3_^9!9wtp]A/CJQxyA%Y4A+wNg>epdAL8#@`n(`G1n|0Q)- 1i/J@X_G' );
define( 'AUTH_SALT',        'RjCunRzXG!x?xixfiuL~!4uf=@W*)$5]3|z!gS6sW^:5 >chpn>4C/04^osYV =t' );
define( 'SECURE_AUTH_SALT', '9[%UDyoTiBtmXSKKy0dm$f7HXZt,)s_7f#Q0v:%0ZN]k$*YA/SP&Nz(uKA2/VDN@' );
define( 'LOGGED_IN_SALT',   '2oIu=jiXS&p7d:/*2_tm];,y >/_eyO?DE:G{xMBd#EPL/8 ,p(R>Dor #,L[ztF' );
define( 'NONCE_SALT',       '%%_$#G~eK-W=Cb<=w+$@e[O!*P(HEw(guC*wPX1!=JL<]7 0nV0+0Z[]gt,lkr`W' );

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
