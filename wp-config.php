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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'ye4UVrJcGsyx2gq8ys/Ryl7Aqrd0uiksscycHWVustZjt8t/EVfYt1TkMeMOvoxBhcCxe9+WM2Ge+2bZKDOHXA==');
define('SECURE_AUTH_KEY',  'PI+7FT6tykI5bjjL3Bo6+wQoJJ4lW3Lmt4u0C+0sHA8HCEnC7zxd4sGWABb4mL2l3XirOlRRQqThVIKxDZw+ow==');
define('LOGGED_IN_KEY',    'S6ylSaXlAOgyoAtzBFObnbnoRHG4didSTMfScQSiS52/vVqPH8Z9d/RC7wIqPoiTn6pawoUvro9BcDW3KP8bqg==');
define('NONCE_KEY',        'vRFV2rkyRmSZS2oZkhO0UvnIbnNaNKWsrA6vQaTEQLS71SdNYw0AujM6H60hsK4RlFYbAQUoUBuVF4abhMXt7Q==');
define('AUTH_SALT',        '80T0pnicg4gN0rcHaw/H1FdJ7YeFqpmYytHnGFEx8xw/IptctBgM0QcGZtorMsJNoiYFYft0Z7jIrdOmQebH9Q==');
define('SECURE_AUTH_SALT', 'm/kpm0mnSZVLA7BgTEOX1SAzHegut0gl0YoxaOBmXoKGmivwRBDJeAmSIjqgQCLjhGlDrg96sbsZT01nFsDMBw==');
define('LOGGED_IN_SALT',   'vc//8RLhyOzQOShaWwEMuf3kuYw+75qMEvgUQYPUckyU0yqrcyaal4vmbWP+XirZY+XJPA4HNBJtRSzJ38W72g==');
define('NONCE_SALT',       'DMWE3k2KoN5rcaA+RlyEzI683rUKoH0HN7EVPSjcsobOusqL/c2eId4cGnDq8+vRYbZ7Wqp+SEMUSIOpXFZFHw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
