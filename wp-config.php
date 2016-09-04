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
define('DB_NAME', 'athena');

/** MySQL database username */
define('DB_USER', 'alexhu');

/** MySQL database password */
define('DB_PASSWORD', 'hqf5201314');

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
define('AUTH_KEY',         ':@[ecoi]s|$G{3S_%YVkhT*tj~rU[&X_0Rl!+dAI9Sq%Ul bdi-QfFmW^oI<IATP');
define('SECURE_AUTH_KEY',  'wC@&,]RE>A7aI?=<z/zdx^~sG$-dxB(qibLebTud}Z_+ 0LO]9)vxpeX@k:}]xG%');
define('LOGGED_IN_KEY',    '4h:T7ap9rWAKfNiYt.j1$vBUh67w1eURHKfd8GtR?ZG8~Wxk.2dR+Bcr7X%3hTvE');
define('NONCE_KEY',        '7:FB5+Yrfpq Vf=^-SS0xN/lGF8t8LXOYn}0uZUlyS^LL-i[LZvBM61:h+xF;;Oz');
define('AUTH_SALT',        ',e7YNvPen?=;@N7[?<%WFl#I<VK<fHgua1.3]$!b4c=z}bWL>8B!cI;7=fl-PulI');
define('SECURE_AUTH_SALT', 'Y3T8gE9hjau;S>Dpr$@7~&f0mTqRqUY{B8`nO.iA0ml&FU5z`g?K[j(Bu{K2`9g}');
define('LOGGED_IN_SALT',   'YTL7AW::&!r1O_=dnMLY)34Ta!@>v9$zTv^Q`GF|O`pf 1{p+OO$R?C4Cd?W<6YW');
define('NONCE_SALT',       'f6Y]]$FEgrtpL.F0j5GT8[m1fOCARbD!@3mw(`a%p!1,CGQSn3/NW.qZr .P4UkZ');

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
