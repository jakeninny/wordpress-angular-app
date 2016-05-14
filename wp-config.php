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
define('DB_NAME', 'wp-ang-app');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'BWQ!Gq-:v^rJ[9GIP,8+{VzSlu2~]AyX$[JnY<P`O,45Z(<Q;r{e7.R=na0qB^/y');
define('SECURE_AUTH_KEY',  'd>GPgL^]Yp@k:,jsQrHHu7x)0`^/=$5,^v(vi2S,s@<xn4v9oT,neAT.PC8fPGX?');
define('LOGGED_IN_KEY',    '%v5PAJ4Q3SW5hW&:b#xWT,?=:<.b]C:8@#NoJ%o+w,]<tOmUYU$PSWf+}|a{v63$');
define('NONCE_KEY',        'hj$**HbOTU6%) f 8gH_4)@0l|]N2N<}pinn3Pe2W `MaB:Z+IR^$?8_RQ1;^gZk');
define('AUTH_SALT',        'PiPSy-KLyrg,JtXE$`)u]{qg5l+A?$~;esNV+>!j{&^!LIXgH5+Qonl}X2uGH*{x');
define('SECURE_AUTH_SALT', '1[wwv~/e&HG+a)|HM.4^l_uFd-J[Jt{w3QgI{.9vq`bd7j`<_ZT)qNxFDyva*kN;');
define('LOGGED_IN_SALT',   'w9QW: UaQ?eK)`9VwOf;-&>#Q_7><3@^ZD@BJyv3N`16_5i33?`Pd7w#y#4ji>Iz');
define('NONCE_SALT',       '(L3@GX`:#y&qaDnT7*+$$vSn$10OjY10ZWeShAv|&*T&&t,?=]LS@w&:n lTrQuy');

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
