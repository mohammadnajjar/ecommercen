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
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'ecommercen' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'S0WmsNfHdQyHgj31hKz8TcWVuuIrGW50ayw2yti5k6v8f5H1ImiuOLTxgJBRnqZK' );
define( 'SECURE_AUTH_KEY',  'F1vjRFimTC7AABUGSEbuBPCZy6h79cjo1263VyvK6y1mgH5ofmDHhUJ6PDUoxZyM' );
define( 'LOGGED_IN_KEY',    'mVYiPjN87q4KgeysxmQzyNlSsDtyIkTFPyx1KRkVVoC0mvQgY1MHcyxUv6aRCwj2' );
define( 'NONCE_KEY',        '8XbaPxZzJyc2OjcwGRUy8yp7l7fCIntcgxTvJ1mtGwCOXmlwzbtrKjH6PyPB6mup' );
define( 'AUTH_SALT',        'v2ic416uHNEa9K37ptk8VPq3fVFKg122JGOOXR5ApmmCy3jmV0nunJA3dP5Slw2h' );
define( 'SECURE_AUTH_SALT', 'zN1xiZKj0t0lK1xqE3eYgmyptng6hAUA6ZGXekRu8CTIZ6xZTCOMSxAq9N8fIsGQ' );
define( 'LOGGED_IN_SALT',   'mEztHSNYOfHe5ip8eWQkYZdtxYPKJQ9PVreYAp6aT7oW1ITnqD0ZlFrYHHpMS2fS' );
define( 'NONCE_SALT',       'p0RZiVAjVhoSzkaNr7TEQBAoWFC3OIIS5Nq88ZQOFq5KmshItrF17HNme4FExmTV' );

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
