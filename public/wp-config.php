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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         '>-[Z S~~*f8/Wn_w+Qp7]M4A*dfH0Neuartti1bBXs*Nu_^]c~M+):`*|/|SQ/W.');
define('SECURE_AUTH_KEY',  '!=y3C7+iWq L1o>|EAo6+r*g&uz|Tt1xfB4]W<u1Bkpr!}}2X&6/Y)KI.;XhOg]!');
define('LOGGED_IN_KEY',    '|3|Bz8kpjt9|+g+u5EwvkH5i~]e4(>Oj8{<n4^l/lp$ZoW1~U2*@8g-d0|-6RzPA');
define('NONCE_KEY',        'U;cMuRfe:$7[RuJhr> W=K]q+O-IDBSF*nO7snb|=4+AThnL;>/P}+K<Ja-42pDu');
define('AUTH_SALT',        'Yc$>pv28&k)fbuf_0PIFhoa/AN!%g[i-Ak:|a|j =Ld=Ewap~pkRD#Q?0_3t~R[t');
define('SECURE_AUTH_SALT', 'p<AQ#?$$eeB:=| c}WN&xVu:5B]7fZO<;T.M]/A+vS1h%N1q!$xQyb@V%.^}g !&');
define('LOGGED_IN_SALT',   'F$s%cmr9>#~^}|E|R5/ZLl6vN~/57cIP!nlZ(8BfHVPp&s@ovOxlmwQ|?$RHMTv=');
define('NONCE_SALT',       'kOjW1<tV~Q+0G1Awr]a/0PaKG}wCb=J5>$B/_Bs1;,0wkiby.1vo)^=_:mVA.X6X');

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
