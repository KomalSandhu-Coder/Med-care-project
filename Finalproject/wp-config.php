<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
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
define( 'DB_NAME', 'finalproject' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J+#{O&.zss2ueDb>I11OiSk+yH5W~zv1s[ADX.3);<IXBY|J7N>?v^DV2{jP|M00' );
define( 'SECURE_AUTH_KEY',  'njWX~/[w!6>I_hC<sF>coHp2FDCX1X<aE>,-sCRH>emD-a%]va<lg*yqIzJN/LP(' );
define( 'LOGGED_IN_KEY',    '(F%GNW%f=7YHC%m~m-wUvVn.z~%sgKqXHk+7Kg,7X[7)Xlfm;]ggHy/0R=8g-skm' );
define( 'NONCE_KEY',        'J;-QTR*f^cGU:=p;@CL*e>dpc/STDoacWj@1DaL<_S.)M_oJ_XJbTv V<G0KKP>M' );
define( 'AUTH_SALT',        'a`8+J]@($Th-O{g& *xPc(XKU{*MgTe~-ddAu[%1ihr8k=Dfm|JSp0Wj/.BvSFah' );
define( 'SECURE_AUTH_SALT', 'x?myExzgP|^<%iv>mizK!{uRBFO!:Gg?F`!ypzb=|C]Cfpv1CvWVrX>);^T,oD*b' );
define( 'LOGGED_IN_SALT',   ')f`TN]w9 %b14.lua,p4- 0$sCGUjQ6($r>.%QzoKLi.eIdyFZyv,4ju8IoY=&hn' );
define( 'NONCE_SALT',       'Obm>i75cF!AI,=8X[Wu^60wPV+w6r6 Gh=7Wgd[}yO)6S}JLS:[@LY0_xyqy<2S:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Final_';

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

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
