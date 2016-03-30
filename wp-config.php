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
define('DB_NAME', 'gatewaygi');

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
define('AUTH_KEY',         '|N5a)Wf>xVL6pG+A@Y,R.0/dsaVs#$yg-ES!pbuz`&-NEHO8Ib(`i@ ,Gok+598I');
define('SECURE_AUTH_KEY',  ':)qY*,mui5U$</5b_1Q3z?Q!U#`9R!S71Ypyy|Ut@ad{z/ YK.sJ9+Y41S.FXTlS');
define('LOGGED_IN_KEY',    '3Mfe//F :9ff5HFa8r <q9?>|Z?D{MKKKmym2dpQ/FMiE)WmlH#[Fog>!m(@0hIP');
define('NONCE_KEY',        'aTk*-XD=)2VcKYqqgkMetC_3}Y-LQ&+A7|`1V(XYt*H{S%RQQU}7RHwk}dAIM|b-');
define('AUTH_SALT',        '{vs1mA=Ccw=7ae)as@T9 U8+[*z&m/87=x4,1=+h>%W|qv`+Z*eQK7k};Dk:pmeM');
define('SECURE_AUTH_SALT', 'm+r>/j:k/-@9EWW4]*G:m,D-7wAg[/oty~555[>_FQ_<%|AdSX5%dN6C_g-SEUtG');
define('LOGGED_IN_SALT',   '$RKhtS5P;y~YjZY;sY57q[}+YTSxEBn~[SJ:Vk0=6rf}B_`:%Y=ywbB47`Yk,7 }');
define('NONCE_SALT',       'F[Io|*m6u6tb:yo]h/!aq!GbYSSK_5ip+yxBkV`L+Zq.;$|Ex8yD >.+)V&+Y6s3');

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
