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
define( 'DB_NAME', 'bachelor2020' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8lbKQS0BbEDL8slIc6O89syr2oMIFyLfCW1iASKrLkp3Q60STeH2yDRxRFxp5ndV' );
define( 'SECURE_AUTH_KEY',  'FEHWEHp8WOA0Obccx43JnaUydbYGpXxouky8V6KX89WShZcfRoJULdIUrmnZBcf2' );
define( 'LOGGED_IN_KEY',    '8scVhA8Zw1mKcgnOxOBebfv7UzOTMJjm9gtp5t07tRTZrBCgZ1PneHueiLlc5R7e' );
define( 'NONCE_KEY',        'wB1M7a0s1Tl03U5aCL41HzUWhG7Xf8KTWeZEqYa1OTOYMFh3gVCSStTPEi6Oa5cc' );
define( 'AUTH_SALT',        '1fRQ8HIyELwlbcto4VaSDx6l9cJL68bA1E8sYjMhaZiFn3zblomOgjnvK8GOkss3' );
define( 'SECURE_AUTH_SALT', 'Cd4bJOEuvefVpnO8iJvebZCbFhuSJUibH25j7o02wvSDDtnNafHEhCAAPGKYeJgo' );
define( 'LOGGED_IN_SALT',   'muDNWvYgzlzTJq6ll035iVvqRTmjbw5G4jPfOeigTswTyXFTKvCnXnz6SYiiTTCg' );
define( 'NONCE_SALT',       'bgeDl0OFNq4Dm94rKMf1RuafzUAt1KRlE6cIHT2RguJSJKBl0juxndCEFzHZBe82' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
