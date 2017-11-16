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
define('DB_NAME', 'WordPress');

/** MySQL database username */
define('DB_USER', 'yves');

/** MySQL database password */
define('DB_PASSWORD', 'yves');

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
define('AUTH_KEY',         'C6sywdCk@JGL`D#:Aq:oFx%n}.(<2n_nBlNNQ;2s%I8m_FgwCBBA)><F%wWNg:Bq');
define('SECURE_AUTH_KEY',  '2(19S2?;`w]q+c7@V^8gn*,#FA w86BPPp(u7HO]sVw=e=9N0U>Oc*G!Jbwr@vwY');
define('LOGGED_IN_KEY',    '-FM!x9*9y uokGpi3:bqBsM$XF|4+~O.4k2,/lsmfVJBJ?teiQ#sA@&xSJY{+%!<');
define('NONCE_KEY',        's*(tIdbu%EF0XL-)2N,4VixuzPmT}Y$L6|7wcPSmWX{WP,-L4C>J 6(z==?/5;kV');
define('AUTH_SALT',        'XVwjqw]Q8m|Bx(yz<C<F;;tCZ5*_FSe6I+,6#D+D~h)L1<E2a,(v.HN`qxLyf=Q~');
define('SECURE_AUTH_SALT', 'F?zb6>MJeYC4}0z728;Qo{FgMb(^,lg+i;Q]? s;aO[*y*{8q0dWYfvTqO25y&nq');
define('LOGGED_IN_SALT',   '~{n2yvG#:sU}`_b_=EC*+vic21D0/VY4<6tjx5]ne{,U:Aad:q_%D!kSHA,g#6fR');
define('NONCE_SALT',       '{G-^mn.*kpsOsB4NiR3yqKsk{.l&%Nc~@Q)a=t<V,KX8X*x*Bqx7K.9Gxx9,(SY=');

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

define('FS_METHOD', 'direct');
