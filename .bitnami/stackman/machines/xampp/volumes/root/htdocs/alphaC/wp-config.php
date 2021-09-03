<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'alphaCat' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '@$x!al^gw${ly$u?>P(+butC.(UCYas9Hn@+cYc#s~[tQvxDe*CWj/vA`$.pZX>q' );
define( 'SECURE_AUTH_KEY',  '&1?]zZ@YM/`}6RIb:V3VGQcS-U9@Cy$@wWrvGB,C.O&DnX{SMR4fq3RvU6j>$.85' );
define( 'LOGGED_IN_KEY',    'U!Ih7p_c!T9@JN#wmpUrmx0y8ZAfgl<7m`+Flz][RuE~H]r^a^l)sC}C9D3,*_6#' );
define( 'NONCE_KEY',        'd~0(5X_)_enP.g3Q!OEvzgf)3pDcST.m&CA<8IFI@:+yGt$rF+N6pPAfy%}a` &|' );
define( 'AUTH_SALT',        'bL{;XNw&-*U/OQ/vGS9$>PDqn*u}Zfa~@qpAr~]pw:bp*k^tZ,3JX@y K*7()BR ' );
define( 'SECURE_AUTH_SALT', 'v]^DBUW=gFkCHK,jf>(xR!2c?Cu;81A|[TqpDxGL]XR,(~cfy;@Ls>lStXX@!8YW' );
define( 'LOGGED_IN_SALT',   'NZ.rj6 ayz=Cum+7PvOtZK|.M:%ptbZa=EQJ/?BWM! ,4[{bSONNk?.BuSqLJXo#' );
define( 'NONCE_SALT',       'cfV.QEy%n]mzEoGFARzUPu@Qr^KAN<_Etc9(;<4jm>lW_|W;<tVJEH[IPV;gYOY/' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
