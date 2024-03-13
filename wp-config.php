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
define( 'AUTH_KEY',         'FEOVyd-)~UYNSggC>i?*QFw+s3N4i8|,V8]TD<ct(DwYWp>G6B1!KPx&Y)8%RBK1' );
define( 'SECURE_AUTH_KEY',  'I7268;sm:-N@;]o:o(*{P8pt/0tS!30S/P#7fsdR)Krv$C`;H/3&]Se!PJ^%1RLa' );
define( 'LOGGED_IN_KEY',    '+W#dA.CK<*<_(X3.v^w!rsI|rJ*3.yIvO^)`@m%=eJ*b2_ {cVnq5EEYOb!TiI:>' );
define( 'NONCE_KEY',        '1Afi -ULARCoR)48*aC;N<3ekc)o9:o8|iw|0}v}U,(WI=9h`Re`==W_`U]4piF.' );
define( 'AUTH_SALT',        'ub982Raa*Jxo)`{n3[FBPVUC)&F][),FR?Lm&1NaZ*~u~t4{n+?Z%Br7zdN{26h/' );
define( 'SECURE_AUTH_SALT', 'ho[R^9HF&v|)cj):t~/nq0yQ>]r:8l@$r4x&i; CxQ-.[Bes^$Cptv3GH|oEs{Ys' );
define( 'LOGGED_IN_SALT',   'G4o02@K05<W)HI&Xw%{Ui%3f/zPW)f^b*qH(DlU*Wyq3y9yK$dvG=|Ba&4g @XQ[' );
define( 'NONCE_SALT',       'Nm24-1h>2IfSH?rhwVe@8fFJQ*nl@/5z[:f1,&b@;k!)NKjd^JA%,?0cIm;G^UG_' );

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
