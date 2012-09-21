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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'shipitsocial');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'mlj)/+R1 @jx1N<)8N;Kn>rN>wtL?+pk0-E=FYe%u/{?Ty(|EB-eaRd.;N[1q%V;');
define('SECURE_AUTH_KEY',  '<_9r4rm|*sSqKjX%Tp5<u1%C:Y>hf$(R1ssMa)6sMl*.U;i>?@YI3R]nZNkiD%4w');
define('LOGGED_IN_KEY',    'Sp,i,jn0b<HVyR/Io?6<`Em?$O.=9rev(5s8a* *;Vqx`^7Z>$Ktk/I*{^*rl/Y7');
define('NONCE_KEY',        '2eRc#Mqd#M^S73DS,?ILkl*+_]Bt01`|c94D|LpOzA;+GehsFbO_V|ldD}SYkY^0');
define('AUTH_SALT',        '04{zw<>+m4/Q(=,/E|1gOc<%O8H?.5ox]iO(EmKe<*L`I] #[6ErT-FsC6u^meEv');
define('SECURE_AUTH_SALT', '<Yu6^0:6|d}zx_i[`5tCK0u-.jF6 Udc@9  Xhl]V#dHnK8wVg49n0*&gJm5B+BO');
define('LOGGED_IN_SALT',   'f>L(hCdDWcICWB#8YePr+gw!0c!TH`c_+1n;;K<b3s3U?lYd8E46?GO-~||5G%{*');
define('NONCE_SALT',       '&E-u]Cl#LK#MZWMT+y%{F6&qtBqQFC+S7Rl{c6`N)^42/aeey4!,Qn;qY|:9Z# J');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
