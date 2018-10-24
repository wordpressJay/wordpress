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
define('DB_NAME', 'blog');

/** MySQL database username */
define('DB_USER', 'wjl');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '}=FzR{yXr0~sXg0}xo^g!/EP)6Tjk30/0L<gP}9m9{$;4}=^o K(8R,|>TI?>8J,');
define('SECURE_AUTH_KEY',  'P6W$wm{4gJvQ9_[Kk*#|2ROx_9F80Vs3sa%`F,VxQV@ve)BZ7Js^YnRPGs!U$d{J');
define('LOGGED_IN_KEY',    'j]aXDiX;xk8p*BZpfw+F=13XFOw9S%UN.fe~$#K`ul!|8u>oQO-IP@#$0tmV4[xq');
define('NONCE_KEY',        '4=);R8d=8Sb{m{>-BB@Q(<L&c1y|LN,S(66$EoG5bN9=jp<ZZs3Bq1KGM@*(k.-V');
define('AUTH_SALT',        'tuK$Q@.AEM:I7`87Z4JrajWr~*6EcNBZlFSQD_UE(AV75Q4>HoBW^{/xx_p -Jn?');
define('SECURE_AUTH_SALT', 'lbGbcPifm]/WyFJ(uh^(|`4e6~@^5)x0_<!?,1k:gjC2ok!/]?]1WH(lj73oxW9:');
define('LOGGED_IN_SALT',   'W_>/h[w]0?Rij04u-`Am-R)cYSO5 HyC`I$x9or~9RL=G9.m-M~]*A0_t-3qlH)f');
define('NONCE_SALT',       'pr1_rZFSD@^b?KJiDa)@ oYlQv&J>FH&mTKGuRiXi-f{VBD4Of`S[Tde:&JLLR C');

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

define('WPLANG','zh_CN');
