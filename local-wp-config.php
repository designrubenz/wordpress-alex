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
define('DB_NAME', 'alex');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         'nX?l#w;g,Fw;fT?`WpG9>Cv$[%e$g;*l)69I|/j`[#nxs-Q/Tg E+/P3Az&X[Q75');
define('SECURE_AUTH_KEY',  'dW1-ZQ)9ZlGqn*kmdXM{M YIqvt$difi`z*+k71KT}<nO=vNj*7txEM9vbkEDf`Y');
define('LOGGED_IN_KEY',    'Zo$1KF#r-&5-k]kuC>8C=VmNydQpPOp}6FLnnn{p`7}UZa4X;^@]u/E!lp9Qz6(u');
define('NONCE_KEY',        'QM!f$Pt3(IL*|K#Ibipn;DbRA_b2bue1kp9KUhGlqiAC*AUkjqFdg*Y_>^H&[HG+');
define('AUTH_SALT',        'P*byrQOB1_#hgkfA=v<O+r,lwQkJLDb%K3w_Xb;{G`0%E3b5-0uYI*wNt4#_o,SF');
define('SECURE_AUTH_SALT', '-(X@$~Nzi*s5l}ITA;-g+gguXAq<mue!!Kv*9}k?/!ig5JpAjs1{F^|aDST;;:BQ');
define('LOGGED_IN_SALT',   '&q>-VoOc_~0<7.Dn+4ne ;y,tpP%LAy;/TrF`Kkecg^oO)S1T#a)K {5QQ0sQ?KV');
define('NONCE_SALT',       'b{HmN7~mu)t<k{H%7$,||qra^&l7F&.18cMs$+s98!g_1ZWvi*C%%vUo6M9iZy]K');

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
