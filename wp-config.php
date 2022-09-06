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
define( 'DB_NAME', 'mecontract' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'v7ZYwlW7ZOSuEdyQ5og2sXwlEFPjxWorP2AUU688r1ylyFso0Ymrw6pM0p70HmQQ' );
define( 'SECURE_AUTH_KEY',  '8C9zTaRMyib9xomyJcicGnTzw8zXGeRfKU4iHdFJSXMA0ziQZ2stJ1Fc5O1BzL2j' );
define( 'LOGGED_IN_KEY',    'iwtaGVYunA1rDvTv6jAdQy2O4DmuuGZTT2FrWdwEhVJQTLRBGasRaPiEz0eZP4MY' );
define( 'NONCE_KEY',        'gBrhGabKOi4zk6O7hA1DZC34qdHY8Irt9IQYpD2JFn27KCixPnVUe86Dlt8QihPf' );
define( 'AUTH_SALT',        'hl6xuG5pnjUTA8bVoFwNrqd184BCF0evdoryGVU44xmvpZuIRhGV79gkBEeg8XEM' );
define( 'SECURE_AUTH_SALT', 'i7JNhdY6VkKdP9yLuK4XSepXPTvgcB2wh538WdMnsIHU6mFTSbsVZ0r2SPmHXCti' );
define( 'LOGGED_IN_SALT',   'ZgywskzbA8Q4fKPI4mbSooXT2BN5fiPM2WUxvfJeTnYjwNgzAVPU2M60i6uJctp2' );
define( 'NONCE_SALT',       '5FSV400gfrtz3cFN4gOM8Xjz4JgRH9WfVAU9zpZNigmR2HcZtxTSJwDy49RJoB1N' );

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
