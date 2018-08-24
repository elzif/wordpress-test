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
define('DB_NAME', 'wordpress_test');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'CX3Xh|=r;JU0WFjpYQGn=1~]0_Hj:w5Me66!rei;T._KB1m+?iJy(p24pf0-$(c9');
define('SECURE_AUTH_KEY',  'XxPR{OG)108vP$UA~[1B=)r9G[fg+j8)|q+GEu|:xuD1_++Us5{-%8>JYIJaN]vv');
define('LOGGED_IN_KEY',    '&?H+p13c}-&pU:`Lj-ND%W0[{QD7<_tQ9Q6}RfBa-W9w-EpX(pmKVP}ZL^{2]N 8');
define('NONCE_KEY',        'z$J+VU--tY87Mzv(}ueb1/%@p2.|9ZPx!G7Rv`$oN/Z{8,6!Z:;bL6&N5RAp/vSP');
define('AUTH_SALT',        'T-Zh_K:P:rNVltx%nAq=m3(++Ll97LUtvc&XDa@IQ:1*4X6:%lN_!nq7 I,/3FP6');
define('SECURE_AUTH_SALT', '6*jBE<)4/E,<7Woy+X`-?M:5/OzEg}z}}dRM9)tRH3dlzR]SJ<8zUxqy92Ej{HJ/');
define('LOGGED_IN_SALT',   'Z_]ZL{ul?UIJ/:v^HQYf~BlSkx`z`,8?0hQMJ4U< P@#lrRZlJVuW_(ME+88x+$=');
define('NONCE_SALT',       'l)ez/+L1XWTle*~YitIx>L`.p|k`w#R,7H>w6zBPm%lhx,N~#W9jy%2%S+77G+GO');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'xyz78457_';

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
