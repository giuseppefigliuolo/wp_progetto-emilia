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
define('DB_NAME', 'local');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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

/**#@-*/

/**
 * Prefisso Tabella del Database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco.
 * Solo numeri, lettere e sottolineatura!
 */
$table_prefix = 'wp_';

/**
 * define a constant to recognize a staging environment
 * remember to turn this to false in the real website
 */
define('VE_IS_STAGING', true);

/**
 * define useful paths based on a staging or production environment
 */
define('VE_URL', (VE_IS_STAGING ? 'http://localhost:10004/' : 'https://via-emilia.com/'));
define('VE_INCLUDES', VE_URL . 'wp-content/themes/via-emilia/inc');


/**
 * Per gli sviluppatori: modalità di debug di WordPress.
 *
 * Modificare questa voce a TRUE per abilitare la visualizzazione degli avvisi durante lo sviluppo
 * È fortemente raccomandato agli svilupaptori di temi e plugin di utilizare
 * WP_DEBUG all’interno dei loro ambienti di sviluppo.
 *
 * Per informazioni sulle altre costanti che possono essere utilizzate per il debug,
 * leggi la documentazione
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if (!defined('ABSPATH'))
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
