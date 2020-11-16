<?php

/**
 * Il file base di configurazione di WordPress.
 *
 * Questo file viene utilizzato, durante l’installazione, dallo script
 * di creazione di wp-config.php. Non è necessario utilizzarlo solo via web
 * puoi copiare questo file in «wp-config.php» e riempire i valori corretti.
 *
 * Questo file definisce le seguenti configurazioni:
 *
 * * Impostazioni MySQL
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni MySQL - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define('DB_NAME', 'progetto_via-emilia');

/** Nome utente del database MySQL */
define('DB_USER', 'root');

/** Password del database MySQL */
define('DB_PASSWORD', '');

/** Hostname MySQL  */
define('DB_HOST', 'localhost');

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define('DB_CHARSET', 'utf8mb4');

/** Il tipo di Collazione del Database. Da non modificare se non si ha idea di cosa sia. */
define('DB_COLLATE', '');

/**#@+
 * Chiavi Univoche di Autenticazione e di Salatura.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tuttii cookie esistenti. Ciò forzerà tutti gli utenti ad effettuare nuovamente il login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '#7Cqs-ja{tj?+]f-{0eB_zl#1 9uPE%jQ K@VOsr0/37AK$q{7 {3t070jy4mA:k');
define('SECURE_AUTH_KEY',  '*Iat9Xwv#2 Vq~!NT{L-8-r`6}+ H~P2{u_NFx3l 4tMy!]-6#@%c%:zhbL9, ku');
define('LOGGED_IN_KEY',    '3eV@P3mKcV,H<;-QzH*T?KS?jQF|kh0VkV/@>v.7yK77:LGj`k$@0}N>(taUl[#|');
define('NONCE_KEY',        ',])o4i&e,c2d[Y[,!OgeO2u$uJgvm6+Ctis2V-KCmPH1lkV3mpd MGUm|m8w@gTv');
define('AUTH_SALT',        ')9HFD?{rhAy4(Y^rLNg#vE><w/@Esnw*DZ?h~(_I@&XS5W^F,G`TTRwJ<=MQ|9,*');
define('SECURE_AUTH_SALT', '@E.2-:YxS3IOz70HFz#7YVz:G*SM#pOo/Ha~$Q(?u_[%N6|Sdm5rNcc]g5z*jV$7');
define('LOGGED_IN_SALT',   'Wd,(IkaOk<@#BJgCMh&8-.s} %s6oFbq(SU,|$~U[)DPwps@M1}T2~VaJ%|s`6LA');
define('NONCE_SALT',       '~c}x7lP#[X]y[KnJzMI?OCbd_m.%2R(u(QL-f`&Eu6j.=zn<uxv5%sZpI.$=^B8U');

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
define('WP_DEBUG', false);

/* Finito, interrompere le modifiche! Buon blogging. */

/** Path assoluto alla directory di WordPress. */
if (!defined('ABSPATH'))
    define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
