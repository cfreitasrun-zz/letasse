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
define('DB_NAME', 'letasse');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'ksvLav);Yy>9!^F29e8D298f0Qtd?V+r+NFPjio>_y|TmRB;-CI.5]d4~o%fzAta');
define('SECURE_AUTH_KEY',  '@^DG9whp#U*VZs&/LLM@^IaO^TjOKJ2FSW.,~fCW p*t^>`Rq,D~)Hctkt%#9F2o');
define('LOGGED_IN_KEY',    ' [^c}sar[9kcSy^`0s;eJ0q![qe$x>b%U8*W6P&@_qR.]y%}5p7V=/{6)QU?w=!J');
define('NONCE_KEY',        '`bDk29v?/RXy83F6f2:3Vdd[m#gmr7Nlw]cazkY6e@*->cGH=9IpGFaj;K-2-*Y+');
define('AUTH_SALT',        'wuqZn*1o`m S!8o)C X4=m#/%NyPC#^pLm?n6}4aeMJ;R m8?]9|A*vez1ocAN>m');
define('SECURE_AUTH_SALT', 'I+NjSCCW_gbRVj,?hmDb3|5M/uau _ yct(!ry[k0/>49bH4RwlxcPcH+762_A6m');
define('LOGGED_IN_SALT',   'BrtVR1I,g8!fkQB{J][Z]q6v}Hlb><o%Xqk{SGK1>l-f7,U3D:-VR_0PRsT =OwX');
define('NONCE_SALT',       '15-w_]MR->#L83DW=hhy@@E#nRTMnNv5cUHoG5VU0)`i]vGG37v_TtKH-J`wt]IS');

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
