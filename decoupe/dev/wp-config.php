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
define('DB_NAME', 'bao');

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
define('AUTH_KEY',         '?,6|x[!v--4o@fjSLRAw=Uih0AKwvjx!L?f.N4;#>LRfvYD;CU*SF:7V_oJsr03P');
define('SECURE_AUTH_KEY',  'a!lJXx$7ya}YF:Y}I# 2WEoeQOZ?g []C?X@u|[FB3g|Z/M&ww743A<A9V%;cbXK');
define('LOGGED_IN_KEY',    '$?58KRMsNyU[msjd=;Z`n$.YH+_2 <J@9EKX~^6Dd@fX,N*/c/yVxWKXRndUr9d6');
define('NONCE_KEY',        'Ws+*fnhU;<JL4<_s749dd]YBDKF-5&NJO6URQa5mk>_#2o,v1,#QK0Zg0XR+Sg:&');
define('AUTH_SALT',        '*4]aoboU,}ah;FBd50-,tC01Cf7hL^$)qB[nW*s@M]vuJK/wIEaq{c)lX%|0@+=R');
define('SECURE_AUTH_SALT', 'J_Y<C*8K7NBwS4{I!xt)R.O2R_-[H4mV.J-s.|xDuaId-CMU2$NV!8[_hhd7s{i)');
define('LOGGED_IN_SALT',   'Y[qnBGx7eg6,:f|Ty!//nV9o@(8@c`6g;w<6]z3@]MyTgAI9)yM6de.P>1WF^%[S');
define('NONCE_SALT',       'iYt)0p%Txct{**n?HkQs6!$DX?OfV?cOE[q;w9B$Qc9?w5p.J,*p#.7T.F}tHq,K');

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
