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
define('DB_NAME', 'WP_BJ');

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
define('AUTH_KEY',         'B6praB;ZhjCjWK0UEn(<;NZW;#oz[~r_ lJ{hgu3OqE][~ Jb7 NSokb8ZJf)GX!');
define('SECURE_AUTH_KEY',  '<2T9irl[AFy2rl30C %S!:2g2mqyb=,fGmPvGO]Pv9JI}tyU Zs}qbi-ge`Y29+L');
define('LOGGED_IN_KEY',    '%YP&vq2W/%7~RAc+7VCz{h4_cl;J.[W@@ot*5IO^O#]zP5+d8=ske6r1^Qip| M{');
define('NONCE_KEY',        'X|pSUz?_-]ixuPe|purqi%V9NZu46X?Pbo!%.XuJk(RPk,{iEF!QV hZ51`#T#lV');
define('AUTH_SALT',        ']`+I%L{528/ivxY[w_+gt(YQ^j]tBKBj.&%|>Z,4(nayb#{+1JX,:wE&VBqA -eA');
define('SECURE_AUTH_SALT', '%Z%78!e4g/{N98b7cOZ]ZYts5[}Px:X6!:5JCgcY}E!Cr<C{w<[5)Vt8=5#2O}M,');
define('LOGGED_IN_SALT',   'ak=qEV EL@cy)6iSCFX%CcJW)TY7r39UIdC3`6B}GK[vZOW(Ti!+Cty1&6,dG7L5');
define('NONCE_SALT',       '4f.Bgaz_%PJGEV.z,N%qHK~Q${xSE [UhGEu=[H1]D+J0RZfiaWqHnxlXsqMk0@P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'WPBJ_';

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
