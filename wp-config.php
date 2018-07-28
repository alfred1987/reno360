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
define('DB_NAME', 'prod');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'lluvsy87');

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
define('AUTH_KEY',         ',lIE|||lvx?/iD)s)]T{_^m<u+}-1[sIin,)TZ+p#CoM$~?&w&k+/UVZtfTrm?dg');
define('SECURE_AUTH_KEY',  'u`_Cp}}?Oi.x>okPv8#f3a_,x]*(Ty 2PkNHz%X$35%l[j;L0=omI*sI{[<WGb1Y');
define('LOGGED_IN_KEY',    'D1(M 7(aoMw^.svC^};2#8qSbsWP_ShH@M`C2w 8YM0)pI8(jDeykS3022{3i;n5');
define('NONCE_KEY',        'ewddmo{g8Zj$4q&[BXl2N=;w&_(fL@^DFvvS[bu(_y[Wx5P-21i5v61l%~tn)2a]');
define('AUTH_SALT',        'SsaX?=MxTeDrK1?Nrufd_G79qwj0U3IiV|LU/mBiB:Mhv6 +4b}BL~&ab2P0AWMM');
define('SECURE_AUTH_SALT', '<OM$w~C&$,DGZKJCJdlJO0<2xy09Y]x|m*$O-AQ5n}TzIX_YXZdGK{K193ED&yfB');
define('LOGGED_IN_SALT',   'z,z0^:6yf-<B5{*(Fd&[F0s/XK`85dqmgUNFy6;`U>u,iY:`(Pw^IrqD_BxD5sM!');
define('NONCE_SALT',       'nOFt6??P9_wq3DMy0slzr+,mU&KfJ2s!R8%BTcH9Sj~9YG)@^<b(S.o%-Y^<6WY ');

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
