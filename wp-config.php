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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'devdevil_DB');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '!U5x4oF?>_Ub$- )XjYjGc33QE*U36{njB|M`H5jY1hrAr>WsR;wECe~P-zVJXPu');
define('SECURE_AUTH_KEY',  '8`-UD/&*dw<:#aKe=wny4(ty}56}A^FoneXx;x]#ykkn(`!VCYg^1[E/#Ze=) 1}');
define('LOGGED_IN_KEY',    '[;Uqy#y./?K4#(o2b>T_oI+cb,0X-;!)9UJ!Hoo;O6P, #`#Txhj0|jv;ednD6SL');
define('NONCE_KEY',        '|;Ps8}bEzR>WAsz?T/]rpcYf{BW[L*Y.EBt--!M{`.[lFl:(lOZ{EY 92$?0GACK');
define('AUTH_SALT',        'QbA)0[Cu4;Uf7V#J$,C!quw$;b<9qL{pT{{)KvN8b}_Zbd[&V`#MZ95W9( 4Y%/g');
define('SECURE_AUTH_SALT', 'NNd[U>7iD.yzS=cFzFa~e70.]Hah2q!+e2O2HS%;Q:=t{rZSR,y|+jV=U1/@:M8(');
define('LOGGED_IN_SALT',   ' p}cqp1P8UJg._?GQ8on2(+5zT{`c< 1^3$8b|j{|c1OxbtWa:P_,phiS&wGW6xI');
define('NONCE_SALT',       'y/(a~:B1J`}M#7Y@U/sp4`n8NXiy[*[K*5HvOtIB!nP6lRw-,TSn`Vn5=/,&9t~H');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
