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
define( 'DB_NAME', 'webkismoyoso' );

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
define( 'AUTH_KEY',         '9FP^6k`*76h10@=v-veT<0k#27wb;_FO+a5l[:k5%d@.lGnl(+jnH]Man4D@tHdE' );
define( 'SECURE_AUTH_KEY',  '.gIoRVT46.!t<SJ~#S{zvCr4^vyyN5D#YIR8rBwu]9+h/yHXu#I#FQJ:|J6qm#2M' );
define( 'LOGGED_IN_KEY',    'O1ecE(rv{| 84!18-=q[3&`5J,:OS:4[<}K<gYC#{o$e2NOXXJ?]?_GfQ:4qV56?' );
define( 'NONCE_KEY',        'iTNDmb,{L#Uo{C#rUTa^u0pB02tLxC&6GNv~53dZ*u%:QxZkLLgaS?}3#9W)w }X' );
define( 'AUTH_SALT',        'qPH>H4Vc+_fE+Gcs@OBl1%tb> l(PNE #r,^,q^q/|l;s.A#4V&u<*=Zt+6:,I#{' );
define( 'SECURE_AUTH_SALT', 'UOSj9 Q<UFeo^C4htlJh1?^]=E/ds[9G@4sY.gKpZ~O2eMfTU#~Ma`:#xhn8X1#?' );
define( 'LOGGED_IN_SALT',   'bsZZG`NUs i5ftD{sj@dCgt,6Cr?4*+c9#*<#*N5^X)1 KdTKe`mF,1Z6ojN?3{=' );
define( 'NONCE_SALT',       'Wo0<7|Vo@yTS#iUN5+&+oZM$;~TCy~,>;B9:7G(Cl!qPdEg:34~0Q(M:6`SCbWyK' );

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
