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
define('DB_NAME', 'bike');

/** MySQL database username */
define('DB_USER', 'x');

/** MySQL database password */
define('DB_PASSWORD', 'x');

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
define('AUTH_KEY',         '~0Z9|su`v;LB]P+n<Xz(Y;0b>)hmEmLz&fPs#)Z-^x4,9kbW`pVFU^29!.ep96V|');
define('SECURE_AUTH_KEY',  'zbVl~rUC[S~iKe+s^*9SkA7-wPTl/P<L4 h[lQm<:k[B^w^2olfdB dxRWcAlwjV');
define('LOGGED_IN_KEY',    'n_Dj-Jc<>OjId_?7O.[szQ1;L?bh7Xq#8wc9T E#~+hQ-^8]w:1F%fL[>)z <)4i');
define('NONCE_KEY',        ',RvP^>(ZW.:OHJWI=~MPbh&eoMcxBOo+$WNF)4,DKp1sH4(?<G=0;*Hr}4}y-sV`');
define('AUTH_SALT',        'rsr9#FXKp=t:u(4JON)oP:~l`c#Bi#D;< QA5?Hw,P(*]7m6`w+vHPq78y;uzPcK');
define('SECURE_AUTH_SALT', 'I)opx~5pRoqmk;Ri^zy<{#L[a&N-$_*Jq::2^eG!a4t89ZGu8zYgnh&hYJ$w<DNA');
define('LOGGED_IN_SALT',   'AKjhQaDuL_,SJW/SQ_;t Xo:@tI0:Or&gJ|WZ@S3q+MuK%I[>$_/fNZP3CORh!kv');
define('NONCE_SALT',       'Y|0Ep<w`Bu.bC^jEqqv41B:QJj_F2Y&C9xhRZ,;0uaDINblE4v `#EGEo^l}3U&Y');

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

