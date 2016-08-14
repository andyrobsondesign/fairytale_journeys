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
define('DB_NAME', 'fairytalejourneys');

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
define('AUTH_KEY',         'ciF^WsqDH`}#34vCCh(Q9];[2;NW :lMA<9Wjzb$,.UR,z{f2JK*)waz^1fVJY-_');
define('SECURE_AUTH_KEY',  '<u(m cU;^>Lh{*ZjHLu4k^J}v$UTUtZ.=evw }lx5QM=$%.lWsqc )S+opw=yQ)!');
define('LOGGED_IN_KEY',    'L(CW&j:8.ZplXNYkTw[RyZvcut29)Hw0B6<q@Wxm)1V<z-s!OfwH!,7N 2RX]^--');
define('NONCE_KEY',        'jg?=?(MJ2k~L!b3HzELKH,6*(6d%$5r+@Jpjg~@t=p+Kx9qAy_+52:ZLNOT;=?<;');
define('AUTH_SALT',        'N$ftv,HCc: c9[SX]SGf[ED@[gebMJsq.F|2#jcK5&a;eKxd+uqw=dk+ge3!k/bc');
define('SECURE_AUTH_SALT', '#[~~%*DrBV&sbJhJs[qx$10smW}|z!3qqYS3@DXeyz0Lr**]N}XoU*%XU2ke]]4B');
define('LOGGED_IN_SALT',   'B&>O<=l+c<RW;O}i$pULR<Vr$LWEoKCD`@vT~EX:Z/:^gM+=Ud;V$%v*2B*@~jxQ');
define('NONCE_SALT',       'Y-nXNdz`xzQGMIt1lyRki:,.$tr5}jmIJvHB3Z uFad//nouOv/wNzXksQW<?:.A');

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
