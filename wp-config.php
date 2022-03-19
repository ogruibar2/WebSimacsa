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
define('DB_NAME', 'simacsan_wordpress_d');

/** MySQL database username */
define('DB_USER', 'simac_wordpres_a');

/** MySQL database password */
define('DB_PASSWORD', 'P69rzk$U5O');

/** MySQL hostname */
define('DB_HOST', 'localhost:3306');

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
define('AUTH_KEY',         's0N5FSjxMGpMnx2fAlzn2!#ax2sL6ULXrMmaaH4AH(b&TbE67#NKBDjZqObi*#3&');
define('SECURE_AUTH_KEY',  'F@hfvlt@t&!)CabVtCoiC)zRZ2ZLoPvKObbkX*NU7IL0ypo%&85)@*gVO%9lWF!8');
define('LOGGED_IN_KEY',    '5sluzvl2nbwFjJIcpNZ@uC%DEZ&P4XMo2S8RL7C6Gy(c&RMHH0rL&^9zziQKjT3H');
define('NONCE_KEY',        'Uz!S#1PUG!x1q#tYlgK2)e(dsMtBIQBJt7bT!F&Ntq4BKk5^jf)EAvtYH7wD20eN');
define('AUTH_SALT',        'gR3k7spk9nDrVchY5aQA9jQLPWhGnu!8gMM8q!Zt!KIfd2u#i%E6^hrfnJaBFxdR');
define('SECURE_AUTH_SALT', 'f@xwMA&x%hMnzmLs10AHRf5&)gwut34xIxwdXMYiXYXzNNJ0Ea!4gwTDPjLyKkrB');
define('LOGGED_IN_SALT',   'dd4(js5NqYa0lyZv8agQS2wp14a(!croWgkOy*0f%3t^Dwh%Tp^uAlXgk8XF5mrH');
define('NONCE_SALT',       ')94pfouW0CRaQr&I)wIWdwl1xadIKVs&fpsIcBEvxGgyxlM4bhLTc6R@MAVa6@KC');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'cWfCcJf9_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
