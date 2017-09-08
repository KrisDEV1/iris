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
define('DB_NAME', 'nobodysdb');

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
define('AUTH_KEY',         'ni5_H?}1Q$~s|L/^, GTn[VZdX5!.k0%$2!=~SbsX(P,B} 9# G0p]62$}L_MZRm');
define('SECURE_AUTH_KEY',  '}K0$ #rVk6sXOFN.{^JmL8:8g7/aYQQvx*}@/Ln%3gXN?:1J::K,.%x]JQ4c^eWL');
define('LOGGED_IN_KEY',    'c@C^&e9J)*Az>ahQb_6+lT=[K~S6];`f[bvTGd@8Qqa$lUX:}r[i2WTh58G;T,b@');
define('NONCE_KEY',        'I#x$6@rkL=9R[$#$LZ?qJ}9EejfdHYmb`]jsdyzX%LVZjdr(}ls|PAK93LmF7-jn');
define('AUTH_SALT',        '.;_l|wAL~I00j;r<Q&gt,v9PVa^w_y+,4@!jsBFAg6N[g!6-^w2ckfq?|sq&v/H&');
define('SECURE_AUTH_SALT', 'L3:-X7kKXA~2W_R5^q(@mtU]-+oWWR|:U(RRqpUD)#^apPcsO1dR]CrTrO/1ZTHK');
define('LOGGED_IN_SALT',   'zg-2mu$qX]DjP+Y<d%! )A&%~xH3,%JOp[VajNp%6m|<3;3B_3&42C>.QpvIh9Zm');
define('NONCE_SALT',       '{#a9i(Shdm?Fb$M-U|q*TSjvH2M;<k59KQv+4RY,M`E%8!9Bo>*F.M9L$dswi|4D');

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
