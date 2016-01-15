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
define('DB_NAME', 'wtmjpa');

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
define('AUTH_KEY',         'pC7l)A+b_`d)U.Qy.)Skd]:I%6J|HogGA|n]|zaLW2NR=(YI,ItAoH>(:*=v}-G8');
define('SECURE_AUTH_KEY',  'm]5EXE*X6#EKzne,`x)N&E~q1T[>wTEN:8#~=+SLo}6X+ -@q+-,{Lg#j0h|H,eh');
define('LOGGED_IN_KEY',    '{O?DM@hWeKfX`f@(N4vXzj7qNV#Lrcf^B_O$nGWd_k-yTu=_~+%xz&,G|;@I|g&B');
define('NONCE_KEY',        '7gUxoB8_sgnG29lbUggg@hUo|7x6H^21_J*=jTZVF#O6q{fk9ZLcg)7-g4LRl<IX');
define('AUTH_SALT',        '?}} >9C|kiyF!$A6ELrc5KNfobE_$nhZ/+i@KmlnIf-AW]]:TY}+aI-ruf+|:4s|');
define('SECURE_AUTH_SALT', 'bKN}$s~{tJkWx<n|37eB&_0_XW#3+H19-?Qg,+vx|H^9.F+:tm90/dmrZw->qV5-');
define('LOGGED_IN_SALT',   '3w8?D{H)|6NenVDPyu>UZ^YlHW$-$LlIpU_ea6c_@:2,ub~XoWW7J0>^#1P0kmfe');
define('NONCE_SALT',       '@S)NLC2+y#[w|aO.R&I;gwd/kXozJy<+QWHgPk(~B41bQK}(R-L8H|G8Q2.kyLCP');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wtm_';

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
