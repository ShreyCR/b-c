<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         '6X5ncqtaN} fIg[~4@[147m2hg/?)lOzF5Zms-HEN8G:;5 ]R[V[W#@E|=!fv]IG' );
define( 'SECURE_AUTH_KEY',  'M0V?oppl:cNZ-h{`k]B%ZxYe#P!Vvq)$8noPmSu5z~M6Og?J1U6T<qnAgn2z#v)}' );
define( 'LOGGED_IN_KEY',    '9(Wt!UX{M3W1b.Qr`e0qLV#K]t_Z!js:3[GYG;.A$$XqtXS?TdF>.fP:^!D@%hHz' );
define( 'NONCE_KEY',        'TTx)qP>V9ViCfV%ddJ{,!``[/=!*(Lr(<QY+-93Di:/UDfwk:N^6wJO84.OUULb<' );
define( 'AUTH_SALT',        'ESg{l.%|G[kPAJ!Ksw{A+lH;V/B,-F-~r@cFk%4Eo4d<4.4x%FBMN%7xYBjgO4|o' );
define( 'SECURE_AUTH_SALT', 't&h~~g +pDyCHv`2|ZF7Izn/uATl%2=!# xWlwfy{vB_8+b{OICc@.nm=uKhP~uu' );
define( 'LOGGED_IN_SALT',   '[u9t`Cnr1C){rJiDyW+.y.$L)!;os]S;GqrY+`08~QoTkLT@p+xYV:bu)LxuLuCX' );
define( 'NONCE_SALT',       '<4F^ #Zi5u(8,-t~A2_riu%].+Kg&lwy@ov!|PJutpv#Lvr.g/.a%uF:Rzc&hv&.' );

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
