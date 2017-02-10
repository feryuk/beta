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
define('DB_NAME', 'edbf');

/** MySQL database username */
define('DB_USER', 'edbf');

/** MySQL database password */
define('DB_PASSWORD', 'ferike');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');


if ( !defined('ABSPATH') )
    define('ABSPATH', dirname(__FILE__) . '/');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'XQ{j~R;D5`ml(RG=4+r?o<BY5JE4eY-Sl!k9cU bP1<@}/qd>_)*NQl }LkhHM!W');
define('SECURE_AUTH_KEY',  'i~@ik5U+RJu.Kq+Il^@-c;W)F s)AeB+kA{[c<$qU=Y,R{`vd6n~oY{nH9HVR`#Y');
define('LOGGED_IN_KEY',    ';_PTiqqr`rn[+kHy=1Eb%PYZ`=`I,uC@b(GPbVk>`[M8Z;<?@>h3qs+l8kg{&7?~');
define('NONCE_KEY',        ',qg&EmnifFXw?~ONX)T2#he8I=JxY*1C*4 G %H7?,imaC//YH]:=i=tt$KbK7:G');
define('AUTH_SALT',        'a$a&adK0R}:yDjPn4`g*;?L/-(~8pKgx34.+&]3reL;0d&eOfa b^`[KRzcv$M|1');
define('SECURE_AUTH_SALT', '(Tafw8c Rk5xm/#zd*~R2O!KKH20cEwJl8~aSFpE{*NV O<:^)okJJj=,4y`&hN?');
define('LOGGED_IN_SALT',   '!7l$|@t.o=tQ={-P)omG{mTr:ALZ6d:BVFvqo=;#[{&i(8Pb%?3owI.Yz}&d:DQk');
define('NONCE_SALT',       'f4T#Vj0WnNHsh)yC~}T8^@j,p=2(f(O(M0Nn|jX|IS/-(A@reMNYPTzrA!9B5U+`');

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
