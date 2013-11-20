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
define('DB_NAME', 'customwp');

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
define('AUTH_KEY',         'o#(?,0Z6?L4nd|Q,gl0}L^8&!-nI(jvi%%_o9q]0RCyV0&f1+G~0pQ$+QSJfl*Gd');
define('SECURE_AUTH_KEY',  '~Pgo+ /~jY{Bs6q3(5[%o3 oJ(}Tw0cz=Jpf3,E@ZV3/++V}h&ph%XDT6r+=Hdgd');
define('LOGGED_IN_KEY',    'eR)L(rAIB,Y8.7g0Hw{s)+[Vn$5&2K4dR9Ehxg%u(Kf4-$&((=CApftv9+wg8d:#');
define('NONCE_KEY',        'L=W|_*t>+d|(h^YDe+?k:P&_Z[*aQuv&Z7Wrx<0L?Rp.DrXu4rvT0Q#+&:5UM[~@');
define('AUTH_SALT',        'tKG3Q]Od0o~jt 65 phe=Z`kWI98}c?Qy=x<f*:2A$wH^VLP2uF>7+Z+t}#JtQrR');
define('SECURE_AUTH_SALT', '5*s`?K&n*?(5wrkKy3ST?<@(yiX//|*L|iVrpZs/[zr(4K)-{tpC_P-/(**r0Nlp');
define('LOGGED_IN_SALT',   'S9>{[eUs%8|r-{0.o(Z0wzR4!jv0;O8n!2+~f#}C~i37Vq.$/d=*Su:){RXHE|Es');
define('NONCE_SALT',       'C/|h<+uRL#>~+@Z5pY}f*A+%-8|0Ht,9Eh#p14Xu:rq:V:&Vm@~(#rv:aS:Y-[B0');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'main_';

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
