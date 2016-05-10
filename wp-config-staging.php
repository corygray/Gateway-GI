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

define('WP_HOME','http://staging.gatewaygi.com');
define('WP_SITEURL','http://staging.gatewaygi.com');

define('DB_NAME', 'gatewayg_staging');

/** MySQL database username */
define('DB_USER', 'gatewayg_staging');

/** MySQL database password */
define('DB_PASSWORD', 'XtNtFGChLgvM7HKrL={Nws4F}T');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'L:e-j$;f%BW-+p!0pZvYS.OU0l9{ZXgS_-o4xgj&wA`zyYfq`!F,AzisIy_Tpv@T');
define('SECURE_AUTH_KEY',  '<*0TxK-W3 gET-YieHmEzf@_% Fb8M<N8?RJvo$MOVk[8p[h(|_fj,sp:!eyiaG!');
define('LOGGED_IN_KEY',    '[17eC/r=ZOgPC|XST}3eY_CZAuO4M3F/LRf1Z6Jv(81DuQ=&WYS`p8^-;1B0eY+{');
define('NONCE_KEY',        'VWii-vCUZI5<nR)~:7z@xr?->CFej;]-,h3YNIZupkqgl^5Pu5}Par0Z=OZy5Ia{');
define('AUTH_SALT',        'iWCSCo!+-gpi@S[b>|H!j{[YY&.]~z<AWzn9hB^@4laIhyAmIR]+A+g_(Dx|[},c');
define('SECURE_AUTH_SALT', '+{aMY_-RJ-_[(7HQTF %cLq9~+s36,3gUCPN)hVt>{I%(nW$5(*Ci}{43t!kqO:b');
define('LOGGED_IN_SALT',   'po-WFYq@:9h?xQgp7 xr%m`fy@VT+V;q*KglufM#0/{vcVI3q+P6_LQz+U~MRz3J');
define('NONCE_SALT',       'aE9cI|cOs?ny0| ZsPK:7r?g5Vj8*nN*uk`Uv9P~L xEk7L;h0*aC;L -T4|K]gr');

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
