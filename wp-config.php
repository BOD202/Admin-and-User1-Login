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
define('DB_NAME', 'data');

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
define('AUTH_KEY',         'q%DX9*?n-&*G_srIj`C$WwzvHE1O_J(T:VA/#lsys}N{K$[bH$7DA9yt{m5$$^mw');
define('SECURE_AUTH_KEY',  '3t[1jeuE2+E$e!aQ,sl9<M_uoX,rnn,)apx4z|sEL/U*A?IwJ5G:K`B< v87UZF/');
define('LOGGED_IN_KEY',    '7?JWlx4g}F~~17^+?M8&0@{:X=[a!dAr1Q28inWOqY8JBX.Iy6ll<~D+v0jWy-_I');
define('NONCE_KEY',        ':=/6()p#Psj-#Tbm? h<_>yH7MX(3v}3`A2J_!KsE2|C2>yuo^k6*gP}ORhS89?t');
define('AUTH_SALT',        'EcaoX{^mT?G}-,n0z]oQTY#MG|*H<lTwC1~2fCmtyAA=t6Vu,8ZqQc lvqfE?:+n');
define('SECURE_AUTH_SALT', '1~IwJhdsTr^BqGZw/*S]Ur.Ut2(?/a%2cmO#[&Os_/~4+:+hr+V0O8j>wAUU`_h^');
define('LOGGED_IN_SALT',   '@KmO#VO?NJ5=Jg/jYT8N]>6J`Air6iMx*y-u;hUZI&(oFh ZY/^jFFczdFCLOQU_');
define('NONCE_SALT',       '=@%_?t2sNbARf:9fYIn(jk-o4c( .#n1gAH@l2F5SybkfWHcT)9lwi%=msc|n<3:');

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
