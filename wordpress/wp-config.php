<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sofi');

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
define('AUTH_KEY',         'nQFl^6VQ_gGS8h |jd|Hef2k<C[~8YyY*w!RJtDT/DKqu=X2s0E {$tacX&&)ZcB');
define('SECURE_AUTH_KEY',  'bjJTB:iflK|%:ms`VeC}%d2)|iJO:N*NPt}5d}q Y3L<@nJXlg*Fj& -LsH|BBt[');
define('LOGGED_IN_KEY',    'RS[mV))tOlKu[y.c$RyQ7]CjgP<^-T-zqyn]no9`(c64}d+]/&R[rP(nTk_E]|)o');
define('NONCE_KEY',        'N|tCf2J)zw -C2_!KPhv2%3LK*+~[t{:~#cAk3+wk,0{z]b6fMkHP]q~Co.1]X+@');
define('AUTH_SALT',        '?p A9!R|b@QId_<DDcx=W!:FY2G-?k!M:MLS.bOC^04yFC_.ge0FHF`(T|4X)@`2');
define('SECURE_AUTH_SALT', 'AIf1{^||NSQM|O77|?L]-k1v5QCVIJ2zVp+g{]Y7rYjU b2G@IC^(+QYA!~QU%$I');
define('LOGGED_IN_SALT',   'O#2L@KY-mzFt.|^Z&D {(NG) RdMS1tL0t)`TkpMF+)+Z<;aI^A55sx;b#^1N+zX');
define('NONCE_SALT',       ':9$TA;o~{l@=fA[@T&N[]O2X)~8lh3riWZW-x}3`]-+Zc7zKjdg7Aq&4=|!?k$Pi');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
