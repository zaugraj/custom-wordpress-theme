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
define('AUTH_KEY',         'M-#i9_1Ew&e~#bd-rQ ?RTUW<YU#zy4d)y2pF>OB_O%b~eZyJ^r>CEX[tY>70S>1');
define('SECURE_AUTH_KEY',  '2v+~#[-w;gxx!1NSKF!3z E8Gc~XhjNltN3_ZC@?3Ff$ReqRSz-BGotx]gB]Fp/-');
define('LOGGED_IN_KEY',    'N$<%>|<Ex]>W@FfN<uO(j--Tmee&g`tvUjf{)C@^o*;qf/,t;I-2V[;-ms-MC/`L');
define('NONCE_KEY',        'P&Uu{Y ZfAr|lK:Id%-?oD+L=3i(=HaI~Sph)JzhOt uW-4;p|FD+y820#|rYuzL');
define('AUTH_SALT',        '*U)c9 syKM_kzndm[:A!FMnR+3Ud{|&hx&[dlCK4QTh6&PUD>&KL?&++TR|~d%|e');
define('SECURE_AUTH_SALT', 'MRm*T((SZh|/`BC$6#*_Tg?=d%-0`E1-cHh2s+E|7,Ysram-|{q@+{,4oyUa`)9H');
define('LOGGED_IN_SALT',   'uJ,`)CQ=$9}(>1s a63]Lo-G=,yX#FFvv.`SaPSERgqb3O+]N{uXE(|zkHVc3B09');
define('NONCE_SALT',       'Sy^r{3<LAmbhg9Tc(`:W?Fc,aH,At9_-1u=Jf$rzqi&QnKmS=d?Eq69E$@SDnu>h');

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
