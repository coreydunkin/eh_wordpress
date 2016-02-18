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
// define('WP_MEMORY_LIMIT', '64M');
// // ** MySQL settings - You can get this info from your web host ** //
// /** The name of the database for WordPress */
// define('DB_NAME', 'eh');

// /** MySQL database username */
// define('DB_USER', 'root');

// /** MySQL database password */
// define('DB_PASSWORD', '');

// /** MySQL hostname */
// define('DB_HOST', 'localhost');

// /** Database Charset to use in creating database tables. */
// define('DB_CHARSET', 'utf8mb4');

// /** The Database Collate type. Don't change this if in doubt. */
// define('DB_COLLATE', '');


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wp397');

/** MySQL database username */
define('DB_USER', 'wp397');

/** MySQL database password */
define('DB_PASSWORD', 'S7PT[3p-3S');

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
define('AUTH_KEY',         'g6,:?q+fj9;hos022eB~dz4ikk--sD~$&bi9Jf-:gg5su_G#XBa4.(4<El:-731.');
define('SECURE_AUTH_KEY',  'RCJA7ePav#[R]6K.j J-B7mYo-Gfaa&I}(c[ADi~+Wy[Z#VabxL8]J vMs({7~UB');
define('LOGGED_IN_KEY',    'cx|F@GM0-~?J3r1X  #&gk}]1DqP>E)X3W/l|>}u8#f:|Go5}42o3XpRJlE5F>!n');
define('NONCE_KEY',        '3.4w>(6z?KL:`T@eSp@Qh@VpPriU{<EVe#@aV^H*r+T^yka9q@d[Jjzv+?Tc.)sm');
define('AUTH_SALT',        'R_44K}G,P|!L]_yM>{Yj{|3il(3I]%I|$J)c/0c7`[5W>ouD>eWm<PEuo+!#a[-b');
define('SECURE_AUTH_SALT', 'CD4Q$Q~2|>HO|t<]e^=56S*C.o?c?j-xR5(mz~+Yi;xl#UTG.zqr2nJ1?J3/fn6T');
define('LOGGED_IN_SALT',   'L}a,vXroLZgsY%|-9+w/:c52y|~s}StL,ht|u6P|Jx+(Hkb|<gd5X_goff~WS,Sr');
define('NONCE_SALT',       'Jgq5eyn}Sb<ojk|RQ,eHTeWc|#b{akJuiWDcqq3i|#a0-hEa0*5! ]|c}.l+|dSt');

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
