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
define('DB_NAME', 'iphonere_wp58');

/** MySQL database username */
define('DB_USER', 'iphonere_wp58');

/** MySQL database password */
define('DB_PASSWORD', 'E(JziAzsj5ZRt&Xiy4(39.#9');

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
define('AUTH_KEY',         'yFlPXBw5SJ1qdnIr15NT4mVbqqDlg2ggRj874KcYnSBA2MWOua5ULi5nBU4ttn04');
define('SECURE_AUTH_KEY',  '64rLLpndbQYtkdY4tpZ4t7gD1izSac7iHiLwva0fldzsU8RJbmTXA0KksgrAO497');
define('LOGGED_IN_KEY',    'gZaSXjtrBVRepADcZNT2ovCxQU204vLYJE45fnEHyjY3hn5oKmDx5GQKmBVgJ9PX');
define('NONCE_KEY',        'a5AqueMW0DY4tQOaovu2FRMd6dhuFpOuEmztxdEDyEAr6M8if4SNOxjPhcyy5MPI');
define('AUTH_SALT',        'gKRdRA3flcQcgn3Orve8F1CtBP5eYsepebkSClTaIOs60ytxrSMp3XWoxKyjMlTY');
define('SECURE_AUTH_SALT', 'e9f1nm1C32JuVqecw2tOtyW29WY419AJO9Hlf6luGCz7aV0COu7F6PDfoh5g5G8S');
define('LOGGED_IN_SALT',   '1gIhwnSOj7uHjOrPPPfyw1qjNNItol0hxT3tcYB98HsGSq0hjWA3t4li00ViHkOb');
define('NONCE_SALT',       'VO5hzjrCMymKR29Py7Voj0kyvT6N4GXYQwXZNXiGuMJiVXQLgHWA5oWq2iRyORLH');
define( 'WP_MEMORY_LIMIT', '256M' );


/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


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
