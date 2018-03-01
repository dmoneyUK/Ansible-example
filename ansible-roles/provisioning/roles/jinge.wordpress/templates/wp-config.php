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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         '_TP!@2!?`O7q-tXE0>;K8J(<C?$M=~^*wdYDVL^~{zCLg}<!6{&b5eu9=5WMj%IX');
define('SECURE_AUTH_KEY',  'uxu}dH/CIldrf* 1eY.3<vS$P0NR`^K68W9e3TQaK1Ke#MznHp:GL^*z>a[>uIz;');
define('LOGGED_IN_KEY',    '8Sd/+5rt+T+SXvNUEoS(g(k>6SgEhR4t~)yl9c9m)B#metvCB3>)bJ4HsU4(- #,');
define('NONCE_KEY',        'hpT)ufoc.,aBs~iBZMB9AAlrQ6m4SmPp5>|BP3-IJW}3?l]CU7!6H[{b+RRk!iH9');
define('AUTH_SALT',        '@7M8DY7*qUty.VrUCT|BjmPvKZ]XA6-|MLyZg1&(/12BBgG&.*q}-.ZEDqKhrV7Y');
define('SECURE_AUTH_SALT', 'J?C2P<s(k&en_zqOr{=-b-St:Y}k:S9-Lt#*~rR(3H|-:srZbJ/J1z6wBmb`u]i]');
define('LOGGED_IN_SALT',   'jx@z/XxcK./D0W2h{}=+9yoilsU2q5&:g3i3 OQTu>8jW9SX%?qE6tKb<R];L0vz');
define('NONCE_SALT',       'A&l_VVO#I<j}CMr=p.3@v7UM:Co`wgI0U6F_a=7qG@m9+esDx=MLv|>)|cf*+$9g');

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

