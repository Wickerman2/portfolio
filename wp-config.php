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
define('DB_NAME', 'wordpresstest');

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
define('AUTH_KEY',         'o^B4X]R5^X.S[:b~ A.XzQ*6~1kv24G-!~#_m1joS$(`Z}O[dT2l8X2_xXAv@j5h');
define('SECURE_AUTH_KEY',  'M2 Umg*076_<(g^gfk=Z y-{!_6dgs;7gl7>{M?m bP)lh( #C!q]Sd>Ic1e6DTM');
define('LOGGED_IN_KEY',    '6A/lZ%`z:2UuF)E-3/V[~> 7.Rva~g;T**h2sfX#U+0@nC4{cfu|EK)`cd<fm_8M');
define('NONCE_KEY',        'snlMqI4*|_ROLL0y]/.i0u6~s!&%qoh>r0`R3@v;F-P{5x 63VP..Piw/3a 3(?}');
define('AUTH_SALT',        '5yce>}BbzSvaI[hK?747@J+B;cmt})TiIjs~~fM{)1q^PBlxic%`T}mL/E@#Q4jy');
define('SECURE_AUTH_SALT', 'HT6/:qH$Z@*G[iCL=&MQF>Qd~9X5G-t>Nr!5oRB=CG,/Q0J@NmtEiqJ_dIF8LCx=');
define('LOGGED_IN_SALT',   '1U;Mtf@Vgo^gQx2thwVf!V*>,`e9& j}b`a@KmH6(}|.VBS!G;P?<E&qTi|KT7}e');
define('NONCE_SALT',       'Ruf$7Ftm;gESe HyetcLk&DYK;e P!r-WYA=TO~A<1mvD9S|9AOm,IBx5>xQ*_|X');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
