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


define('WP_HOME', 'https://www.alaricphotography.com/');
define('WP_SITEURL', 'https://www.alaricphotography.com/');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'u5573692_wordpress');

/** MySQL database username */
define('DB_USER', 'u5573692_admin');

/** MySQL database password */
define('DB_PASSWORD', 'gdex6!ap&S');

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
define('AUTH_KEY',         '2^B7kHK:t4. M rpfZp@{`/yLi8@+O9R&}b1Mwqkiv8Dv+qD_%Wzvg?Wq846ycnV');
define('SECURE_AUTH_KEY',  '9t1@7H,Cy)G]wKw#T`N+DnsQ;{tVS`FA0`;n7$}B,(g42~z`up9SrP}2F}35m.+I');
define('LOGGED_IN_KEY',    ']}`[9C1NM>dR[#Ony*vDF;[-0^`NM~S01{D2SxG@U{!>b*=%[o>r_db3K8,ujy4v');
define('NONCE_KEY',        '}|Zrm_3~nEK-K5/Y# s-;9XZ(k){Qt0,VK`09CdC6}&_Zg2!x9QqX]lTJaA&WwC!');
define('AUTH_SALT',        'MU;Cny#s(Hj?RH-_ [c3xQ:k2Qr|>!@mg!dJ+/$#*54K;STR%Q,STVpGgv6hAvcm');
define('SECURE_AUTH_SALT', 'x66B|y[nq|@LGx`9lT1smwIQ~>C4)i$A@AFBRRFPX}Q#80&6W2(J`)33TCj=pmg+');
define('LOGGED_IN_SALT',   '&@(K{2VkOY)LI-0wYhx9BTYeGF:Jl82ug:qF]z`^a=:j@TFVC156nxcOqJzm#bzI');
define('NONCE_SALT',       'MC<H~I[t{9JP>x*YX*c0E|G*!dE?5w9gXP~( C@B^9O7&!5eGL[JnVnW2~R#b[P}');

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
