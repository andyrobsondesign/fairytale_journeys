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
define('DB_NAME', 'fairytale journeys');

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
define('AUTH_KEY',         '-}&LddCxXJv`v%Na_~#6! ~mklQt7f]t_6 o lwA#|J(,&ZCh%[H~UFGcz;Wy-d_');
define('SECURE_AUTH_KEY',  '}!YTp1a.5!zLI-Ve_!ph(^o3(_I@~RLH5gzod}1G?_;#r)iA%0TaVYMd3d?WQGWI');
define('LOGGED_IN_KEY',    '(Z7l6[l#;C)u$Li#znnfj#]~#T4ki2n*$(({ob6^LE!g~pTnVxrX*eN-KdD1Kh?m');
define('NONCE_KEY',        'zb)]S-ipx+VMWkA3lw82^%D41vGUiL#P9jUX]OV_s{y;fg-q]TpSW5uNUjWl#j#7');
define('AUTH_SALT',        '^GN-03TG6jHue{ygL2Fed-tO35Tp[<9({6EeTEHbtIBE*EsT?&@sHWD(+5]9IY){');
define('SECURE_AUTH_SALT', 'Ug0.Zuf1CpAJVA.]Yx* l*@Bx:Id=}E$P.tZ.}`Koh!UedszrSpRQ_uH,mjxn &m');
define('LOGGED_IN_SALT',   'Ujkz3Q{K0Hc/j<KXCZyc$L_%_hYJQWh+]1M!!Pn//Cp&kIdlD-+k|1qXLkJXg$Q&');
define('NONCE_SALT',       ';q_*CbqHM2A`qC02ImC_P3:wKM{m1zoUq*Mv!,/L4A&4A0c8x#=wxmCGN)uD$(l~');

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
