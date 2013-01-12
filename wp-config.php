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
define('DB_NAME', 'peteromano');

/** MySQL database username */
define('DB_USER', 'peteromano');

/** MySQL database password */
define('DB_PASSWORD', 'sec41179');

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
define('AUTH_KEY',         'vWPV}S[4m0J& %I,<CCp+c1!+!wJd!RS;aB-Vh~)C&2Y5mV?>sU5`6a<K81t:)rt');
define('SECURE_AUTH_KEY',  '{r[zIHuo$DOoC<F@Ws9;l7SJ/r23yb1$*/yC+t-A`^4AF/%>1|q=4{7s|=AXFL>h');
define('LOGGED_IN_KEY',    'co:wT7kzd(-AIqBT|76^)h>+,1|,zd.sEP%`7*uaW-${gvZHRgx7YjkLHa=`eB.t');
define('NONCE_KEY',        'w@Lkj>+_d7AWVRUAhHkla<.{QqG&0?r+MLo-Ox9|OU|<9XM@J(ygjQPmy@j4%V;R');
define('AUTH_SALT',        'VA-tU~ _K#K-|2JHd2`Y~}-#%p4GS{3R?!UIaAaxp@Om0yPxR|QzM;f|7;ou,r-P');
define('SECURE_AUTH_SALT', '$-jq-hTCtSTfW>+|E&FN62lHPSn#J%i+osiTAc)s!f@]>as8a|6>d)x57K}VtuG,');
define('LOGGED_IN_SALT',   ':F_Mil(7#gT:RdJ+FN%;C*@H&$Q/`9J%:NyXT$*Q!01IZ=L>Saj8QgYI1Hg&~<b#');
define('NONCE_SALT',       '&2t^H44d-2g,MEb%$9DlFU?4 q>hcK)*uP$nac^N8xCK@Xs?RkdOOh$aLMT)c ,y');

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
