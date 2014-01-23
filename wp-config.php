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
define('DB_NAME', 'wp');

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
define('AUTH_KEY',         'wq/!x.QDQ39X^+W+:lEBXAFHPtinwudV(K7*k6k@%_BVB%SZ(aam&VY3Ny8:G&Tg');
define('SECURE_AUTH_KEY',  '0.bp@-Z%~+{YWJZllw?lFs/O{XOO[:~nBhmo_M^N.tC@nlrsi;7.VcqwgCCD2*/o');
define('LOGGED_IN_KEY',    's)xbc*lDNU2^AAjBl}>[}p_C )YQto<T1/le<%<W{~KTL~bfROt&r{@!F7TQ)|jM');
define('NONCE_KEY',        '_#|PwS`l/(+2_(#ZYX=2& #L)WC!8VRN!|g}+kV`PL&8(Veqe>2e`RMYo,N;k)~8');
define('AUTH_SALT',        'Jz5f+wg#D2?P [?~zeyy54kYL}Z},qrlXSgLJ03j[-kqAKo^d95$l&Nak:MSUFA%');
define('SECURE_AUTH_SALT', '-y+ga!srcj5d~qw;QEeaCBv^a`)Zc~c)s@ 8r_!Qn1C=rtpC8<GEx-/}j>1S2>PR');
define('LOGGED_IN_SALT',   'q_>j O(i2!mgmn1<jD>>g2+Xzvu9KCzgAfHv@8CQyY}XqMA0H#tsMHn`S}IKhjhZ');
define('NONCE_SALT',       'm,=MOh_wY^2;~g6~.4^gFhkqD;>W]pcc!XyNaX?3oJX`%tGWW!hrK3>r>j`ga)rV');

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


/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', '10.141.243.81');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
