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
 * * Impostazioni database
 * * Chiavi Segrete
 * * Prefisso Tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'test_db' );

/** Nome utente del database */
define( 'DB_USER', 'test_db_user' );

/** Password del database */
define( 'DB_PASSWORD', 'LvMfz[AnH_LFwHxo' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         'e9_P7WUaW#)t6&=hfG}16c_47,2LI#l|8`O3R:g@&3{^,t Q>+w{4&uZ>%xf&E `' );
define( 'SECURE_AUTH_KEY',  '.bMj}vi*,Ado$1pX$xl=}h_#)+<UmjLZ: #nf7 sC)A9-u WC.}CCu~t|VAI(`BI' );
define( 'LOGGED_IN_KEY',    'yc%7Gc@s}gUO`RG0tXdM%KSei4vD)$n!Wi53)Eewk72v8n37Cpwmg^wwzd~QZ)UN' );
define( 'NONCE_KEY',        'Zjv5yhucvzm2}8[z|UhEkK2BQy$23/pX;scu2owI/y74U-0)+rbd+^u5GcTNp3}U' );
define( 'AUTH_SALT',        'GUDIn><ybB1+=0nbmI$$J3OL{+D_oW|yt/;)7II&wM0F~^L,#_dX~2R!J;yD|#69' );
define( 'SECURE_AUTH_SALT', '1}7zukR9e<M8RDfvQXNdU.%e2I,&f6Vf3<iPkk2(EEJiK$PrkGEEdZPrYkHZ^XHu' );
define( 'LOGGED_IN_SALT',   '<1oTnpl`DNb}a&}ZW5</TSiZ.,1HFzvt/kg]VbY>3?NPY|SkJOD~EFSVHjQ{i>@n' );
define( 'NONCE_SALT',       '@3&(.uy?,x4yb&,xg!ti]a]FUZ0vl=K]I(#!5uGp=(3OgKc$/y40XMG@E?{J6{WS' );

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
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Imposta le variabili di WordPress ed include i file. */
require_once(ABSPATH . 'wp-settings.php');
