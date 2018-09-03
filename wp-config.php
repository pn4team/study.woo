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
define('DB_NAME', 'study-woo');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'nypO;]Fo/Kvgr.cqb`xq.r+~eb+?-#q|BLRc)#E(  UxTB$*LQ2J]}TZ+=DvMw?D');
define('SECURE_AUTH_KEY',  '9u2?3D1e9Tt$H :[Zmv}AYn_[HnoWKX<3oYGueLwx91X7O2dV!%_*^U?%!:4]USl');
define('LOGGED_IN_KEY',    '>^^3 VpKitby,qA*aWwEl$Eq;nF`O]PfbExRjQFlY`R7kbcXU wf~4,fd5T+Wh0+');
define('NONCE_KEY',        '?|j<EP~ap~o*6GnuXY/*CWdsAjVeZS~nShj1n$oStWOE=WrzLM>rs3DEJ1=,.r*X');
define('AUTH_SALT',        '!@SpO9DEBfrcm+WVgEB~XRS7UB+2e$3e,u!GiB9e,=+5gI}8z~).X5f*DrS_p&Gz');
define('SECURE_AUTH_SALT', 'q}P*cYSYv=Nt%R!-miYJoO9gu+<7qYKDZL)F]147*ymf#A`< <%cKa/);W=$$iD$');
define('LOGGED_IN_SALT',   '+B#|yuAu}tf~oLnBsr^ulW<fL:rV{R$S{r2b=V.Co)a ~apwN^T=QE+4P$G9Hs{7');
define('NONCE_SALT',       '1p)}32Lg8HKNfHfxRMPOS5d!CKUr?]Sgf9|1;cal>ve ,W~@VRi/CG>y&jC[d8LC');

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
