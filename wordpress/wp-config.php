<?php
/** Enable W3 Total Cache Edge Mode */
define('W3TC_EDGE_MODE', true); // Added by W3 Total Cache



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
define('DB_NAME', 'gameofcode');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', ':H7/Ca44dt');

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
define('AUTH_KEY',         '62P9ONJT&:j1s!r=?Quil{5FC*^| bR6VXS?V4HQ7&GNa-3,+:=%7`&z+`aE :kd');
define('SECURE_AUTH_KEY',  'S<`L|Zhb;MGQ +!|1zD^f2|K)O2T#>2g!|!R->hyb+((fI*iTS#tWFzs+$AAO~F7');
define('LOGGED_IN_KEY',    'S|[LAWB>2~7fdQ;mRv1}k=Jn4s{O@}]OyVxg_D*&,4-n@0zt~+aa2ANbZ6RHx3jq');
define('NONCE_KEY',        '7p]$[6o4h,@FS9D.l]|}r/I,MaPrc)eS?l3qJsWLtYHN+w~{O)dr&W].c+VjbMf/');
define('AUTH_SALT',        'PhS6f_|}>$CZzIGUW7OV*U{J74I_-i@l()Fg!_Er@rmJVdSZs~DTx++I:|~C3<GV');
define('SECURE_AUTH_SALT', 'rb-#`Hp|&eH;-Wg%s2$r6ofoblB8X3*}+x+qP+55;cHyP+N>sr!:`&36Go-.+Tb*');
define('LOGGED_IN_SALT',   'LOt|Xinp[|U ?C4BlPgE/hD#I2A9<w.Am1L#Vi#KhFIK0H/@xKK3O<@u/Fu^c2<;');
define('NONCE_SALT',       'r=M2g:o.{o5%5?dUZpx(c#VHa2:;>$0)1RDj[8c[9_FFK~[tqo;JVn<cJ/2ITq`^');

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

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', true);
define('DOMAIN_CURRENT_SITE', 'local.gameofcode.co.uk');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

define( 'WP_ALLOW_MULTISITE', true );

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
