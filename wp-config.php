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
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         's 0ZM2!y0S7|7NmmI|W7AUUEe%79.;eOny9!NND#|i`scMbdFDQ!npEYwS?Dl@i)' );
define( 'SECURE_AUTH_KEY',  '*vP|wCYB2Yg5M!&z&K&jhYTLDMK1<Zn0qF~RFuVKrP<`3OPVSckOLYE8E,AOowH?' );
define( 'LOGGED_IN_KEY',    '}p`u e&f!k`[UZZ2#gcaO(sU5;.(h:~9{F9F^q>/2-)B<u^1xJ,U_Bkxp=>M+(GW' );
define( 'NONCE_KEY',        'JrOXYM{7FCU9@x/*BBA@=bvzjR&O__:CCcx]CtA2o@<R:UL!NX?nzh7eQgTGpYX|' );
define( 'AUTH_SALT',        'tvgPKYW6wRzK5`_1,6C`>fc+ ,Xss>.VfM.DG=Y8$Wyih ^p^[!W1=r`.O5/bvyP' );
define( 'SECURE_AUTH_SALT', '2GfD}Q{=[:AoDBCNlQ0?_D^_Mg$hh<yf*i[&.boFxQ@eql~J&=&O5FJknY.iJR2}' );
define( 'LOGGED_IN_SALT',   '-G1KfAKxb1G3>F35l_ sVJ|Y|gZoq43PX8{NpN5 ZJ~?e_#QbG$NU1;+TZpVug2G' );
define( 'NONCE_SALT',       'qf2wBKDwM$deX6n4l-9<mb?L=ed$bi>BhYWkAzpJe`YL]B2wZ:1`3vL~`^B=k B}' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'aa_';

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
