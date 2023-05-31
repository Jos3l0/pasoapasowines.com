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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pasoapaso_wp854148' );

/** MySQL database username */
define( 'DB_USER', 'pasoapaso_wp854148' );

/** MySQL database password */
define( 'DB_PASSWORD', '43yMJP5MdvBz' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'nlEUGbItWboys9wgIkOBqgMT7t6XEJJjG3D399EZjvbIqgzyhboOgdETdjfvX89g' );
define( 'SECURE_AUTH_KEY',  'OPZ2Mro6cWbTvJobdeRW0jOViyrJIaWKslBl4LptJhkic1sqPkGRkcxTpbja50zh' );
define( 'LOGGED_IN_KEY',    'Tyin2Rx2JS2YO82JSrOzjkmuaMCBojtUow2QDOjoOoMGFTw9NiK7BWdZx5nZAb7k' );
define( 'NONCE_KEY',        'P3rcef1Q7y28PCFux1YE3XkbO9a3UHA5zINqAXAoc2v6mnSgfPa6F3R3nDbxuEuK' );
define( 'AUTH_SALT',        'Z6bGs03E4XTW1DdI7xmBOyTyIGX6s4GHn8FaXF26sNUjDcsI84UmxpULFDWZZOw5' );
define( 'SECURE_AUTH_SALT', 'IxYVCAflfbCLWgkiFuat50N0UmRtepab0ABqHqGUdulYgY2De2RKggd6U9hOzcEj' );
define( 'LOGGED_IN_SALT',   '5CLFL6aFw4ezS7c6qQzVwAEH6fOWkFZcUCTqOptXhysojX8xtTCPmdA3HkJFXmPN' );
define( 'NONCE_SALT',       'sOrxeUMg90IQxW7okzYo5WWSlHnlS71sZUx7aTW14z43GIsZ8UGKLeyUXdes5XfV' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('WP_MEMORY_LIMIT','4048M');
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
define( 'WP_CACHE', true );
//define( 'COMPRESS_CSS', true );
//define( 'WP_ENVIRONMENT_TYPE', 'production' );
//define( 'ENFORCE_GZIP', true );
//define( 'CONCATENATE_SCRIPTS', true );

define( 'DUPLICATOR_AUTH_KEY', '-&q=aAS>gWS>y%K@ {[^Ln.KwfCdyD,C0<2/${M`=UwF.|77S^=~;l!#K=wo-c-f' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';