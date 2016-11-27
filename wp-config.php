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
define('DB_NAME', 'propstop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'zhouqingwu');

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
define('AUTH_KEY',         ')]o.gLgR]7lW5R)E}BXzLe<;l!+G3y}%m_GDAF%B(j)x>dl4(-iqEUD0U^rY= _[');
define('SECURE_AUTH_KEY',  'cY,1U2{.v? Xm7||=GA?-t3qk`Hv*Kr#<=KaM&bMT/:/?xh.QR8]R6:PB0EHR=&_');
define('LOGGED_IN_KEY',    'x#5J)7,AW*ifaPW}15+r{/u;^?dW#F4W/v~gC*+2[$L#N&Nu/In9,8|X6o,$+Q5C');
define('NONCE_KEY',        'S5K!vD$gVyj+DMcufv!U785.3>fnR)Q3Njd#z:1@+P;fs-*hi%FPu,Jp8.ru2*ih');
define('AUTH_SALT',        '. h&pKZ%:Uj.t+oczR&L4P1u4]M0] mX!MGUp<`N78GORVpGgv/sM4~CfpuKu0>-');
define('SECURE_AUTH_SALT', '%%R!sonV?RVuZXM%d4t,:JVHP]fe/e0Nf(,L)Gd:gz#yzeqmwbptcnIy#~ubcMT0');
define('LOGGED_IN_SALT',   '&l-FOa<|P]y$UBdbt0fP%+PlId@PQo5w`CmlwnSzLJmupog:vzW#]gV wVW[g]$5');
define('NONCE_SALT',       '#XMDpX0nwQIp @2ZJ&#9o:`SQJccl97W{ZVsZbN:SoOKB>0UlR)PNRUf;#@F!f%R');

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