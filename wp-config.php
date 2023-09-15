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
define( 'DB_NAME', 'theduyet' );

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
define( 'AUTH_KEY',         'f_2EOX9<z[c%*sz,sT~WBr$!`m;%wdTJ<^qPC-pk`R/656&^4R/0[5(KsxE+aK^f' );
define( 'SECURE_AUTH_KEY',  '2:YzYUG{ r6q>#WeqhjhL~rD$yR1,@A=&hX#*_KhV(5/n:-3ZUrx1;cWm+W#XD%.' );
define( 'LOGGED_IN_KEY',    'F~}.uq`I$/dKd5-I(]o+si8J5F&|..5IzH,exX~.giLl& AyuE`&D c)jP|2V-Gg' );
define( 'NONCE_KEY',        '^N1>a7X2a~rr+5YF_uno:60^[PM&zH>;AT?,CzEe!aX^T8R~6Qb;gnM>Y9?(M?3=' );
define( 'AUTH_SALT',        'CB*L >%ZgXEG+->)uxB3uFBaWWdu110Atd%+ZNU?#K_#PL#/iWz}# F: }DQF.Rw' );
define( 'SECURE_AUTH_SALT', 'xUpcv#5{b$YACeTRSq8KbJ8Q.K-vSP%qrm$-:ScX^aD*asTT9tDF~b>nc2;j%Xl>' );
define( 'LOGGED_IN_SALT',   '(}%:Q%ki2!-Pp]}eE|q*=[J`@5GCTL7-N-`TqTujf1J/M6WFRh{v`_AFk:Z1z}1F' );
define( 'NONCE_SALT',       ':5^HU:aq_}GuH(ny~XLo&x]-TLew#~[htJ$5R6*tYXXs%Ju^7U706snFJgSGDu+S' );

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
