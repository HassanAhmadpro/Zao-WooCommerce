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
define( 'DB_NAME', 'zaodb' );

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
define( 'AUTH_KEY',         '?3Ea  *ea1VG#Ge$-tX+WJPz.2g=cnUNJ,`G*@GMfva49g-$$)Jx{(##Bb%liwtN' );
define( 'SECURE_AUTH_KEY',  '&?Yusy}r=Ok4[[@qY},3d{L*?o_mb5RZr4SrE?pg}79Gdurz({2x@tw@T!$r72me' );
define( 'LOGGED_IN_KEY',    'vn&,?3fC7pU,,-G??/;$3tY>jB{>OmN%fU>4qj@EIF%-Xr*H$#rCwhQ5:,{QR04x' );
define( 'NONCE_KEY',        'O6axMyrD2Gs[jv9.O}$]`}[IxcG,)uFN&xvAnzFN*e6T+X0]QhV: )ehcYaX G/H' );
define( 'AUTH_SALT',        'WgRF57gY?Ua+Dl* JGIx`cs9]kv.ZUsbF &Lgn#dRDa/.gZBQv+9e`OJ$v3bRBlm' );
define( 'SECURE_AUTH_SALT', 'mc~2i#*:$Q;0Gpu-Kv@PvB[z8nl.1X$MnKMo#1OfDB`FO9@I(Qz&~~,NAf(b@`:]' );
define( 'LOGGED_IN_SALT',   'E,];jSp7gY@D,2_[$Yidt?6-^&I8Wbi>sGd;G|!FOA,:fe^T*IUK[huh|p:W3rQw' );
define( 'NONCE_SALT',       'ME~h*IZyu~|YoNB4mQQ=P*Rv5Mc)_7Z00ema&xuT)Nk`r@# ?szQ{` ^ArO.JLsc' );

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

define( 'JETPACK_DEV_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
