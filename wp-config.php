<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
// Include local configuration
if (file_exists(dirname(__FILE__) . '/local-config.php')) {
	include(dirname(__FILE__) . '/local-config.php');
}

// Global DB config
if (!defined('DB_NAME')) {
	define('DB_NAME', 'root');
}
if (!defined('DB_USER')) {
	define('DB_USER', 'root');
}
if (!defined('DB_PASSWORD')) {
	define('DB_PASSWORD', 'root');
}
if (!defined('DB_HOST')) {
	define('DB_HOST', 'localhost');
}

/** Database Charset to use in creating database tables. */
if (!defined('DB_CHARSET')) {
	define('DB_CHARSET', 'utf8');
}

/** The Database Collate type. Don't change this if in doubt. */
if (!defined('DB_COLLATE')) {
	define('DB_COLLATE', '');
}

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '~T.||+2e&vVN0[%6$+<c/8=<9d}f]FXqa0[hSqzT&6=rp>z_Cqw5a$tY1,fMebh.');
define('SECURE_AUTH_KEY',  'wzA&d(J`v|JON k&i8e?OP=yXX@pj1KrZ~EJBT,B.e1USHi2+hKN?&?|o}#+w|tb');
define('LOGGED_IN_KEY',    '8d+#/xqY?|Z~ezsf~@7BQ_HhtC?^s-`yovR>LI5Wbw]Q}m.!Ve BCo~rI!{v}in&');
define('NONCE_KEY',        '`E[-h=byxLw]K2!Ol*_}&<IE(SCOO>g3$YX)doNMo|v,<YAyVX}{|?NS7-9TG]2;');
define('AUTH_SALT',        'iT:&=wk@{lD>qEa>I>c(mZ!}` fsF<89%)71/+z0Pua*]y2tPX~Zakh5`1X1_7f1');
define('SECURE_AUTH_SALT', '@@CN,`e9%o8c2^`V8c&EBY+y,Wa{N<P]M}LptdXj+!]-r:0C-WSE-m$&$G<?!OgN');
define('LOGGED_IN_SALT',   'UhQ>%ih@1&K4V&WO.sIJd4eo9&%Z[]f-;;9JW|u!Z5Uy`*x1>ln7~{c;d]+4?bXT');
define('NONCE_SALT',       'Uk?6d-T!M(wZ+3G>*[tE`ia+1yQd8B{_6p}JU6Cs97-YxP:v_:-1qX}~*Esn@^kL');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'yeoman';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');


/**
 * Set custom paths
 *
 * These are required because wordpress is installed in a subdirectory.
 */
if (!defined('WP_SITEURL')) {
	define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/wordpress');
}
if (!defined('WP_HOME')) {
	define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . ':8888');
}
if (!defined('WP_CONTENT_DIR')) {
	define('WP_CONTENT_DIR', dirname(__FILE__) . '/content');
}
if (!defined('WP_CONTENT_URL')) {
	define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . ':8888/content');
}


/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
}

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
