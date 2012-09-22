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
define('AUTH_KEY',         '.Q(!$Z^&=6Ro+FVvW$#_Is,UhJp{L#}J{v~RQ9I?QhYMxvbdCzSc.~->c`HH]1=v');
define('SECURE_AUTH_KEY',  'Pf*7;jOB9EKXdvYn _&iyUn,z7fXTW=&3~SB,*7kyv@v*y(=sppPCpCk*m8|f}ES');
define('LOGGED_IN_KEY',    '@!,.anRK5 xOXDE/pKLz2){?exYw4y{iFEv}Ik*}?-D MzKu*?W{CA0;DuKUso>G');
define('NONCE_KEY',        '$:ia/F`h(|J0-up|EVT!=Yr.{u+ONfY7JT};A}INaQBy@itayCXv(R{x9in*1iV9');
define('AUTH_SALT',        'fb1Q *,M?M+_VuOI9<SVqvmBx{L.Auw.Qv!UL+@5JCb#oEWqF<lhTxu0^n<RPF%e');
define('SECURE_AUTH_SALT', 'G5)Q#hRtO uAI-3k7%wj.}-sM^hH1Ol!4Ug|W&9?OPl/X!5Pf)xQ]`}7 L8kIR{e');
define('LOGGED_IN_SALT',   'tJKb<ZD)TrtENR49C M]g]}^Elnbv%MC~pE<vFczd<!1E!K-he1`0fcB=f2yxn}|');
define('NONCE_SALT',       'N^o_B+Vnakl5Lcz`G8!dHKj6:E_RjuM>&n)wOU[(QnXI^V?gH/KR7iz?dA&EnK%,');

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
