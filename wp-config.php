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
 * * Impostazioni del database
 * * Chiavi segrete
 * * Prefisso della tabella
 * * ABSPATH
 *
 * * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Impostazioni database - È possibile ottenere queste informazioni dal proprio fornitore di hosting ** //
/** Il nome del database di WordPress */
define( 'DB_NAME', 'hair_brush' );

/** Nome utente del database */
define( 'DB_USER', 'root' );

/** Password del database */
define( 'DB_PASSWORD', 'root' );

/** Hostname del database */
define( 'DB_HOST', 'localhost' );

/** Charset del Database da utilizzare nella creazione delle tabelle. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Il tipo di collazione del database. Da non modificare se non si ha idea di cosa sia. */
define( 'DB_COLLATE', '' );

/**#@+
 * Chiavi univoche di autenticazione e di sicurezza.
 *
 * Modificarle con frasi univoche differenti!
 * È possibile generare tali chiavi utilizzando {@link https://api.wordpress.org/secret-key/1.1/salt/ servizio di chiavi-segrete di WordPress.org}
 *
 * È possibile cambiare queste chiavi in qualsiasi momento, per invalidare tutti i cookie esistenti.
 * Ciò forzerà tutti gli utenti a effettuare nuovamente l'accesso.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'JXprzDG!cI}yH0zPYZxt*.tV^W4D^x3$iP+Cl 5K@}7.%Kh.Yo?#ovPoOq3GSH!p' );
define( 'SECURE_AUTH_KEY',  'coI+-$Wggf`Gn@A4VL(5W%hSE]EC`EbA{S#1{fJvOl_wd%xCz,~1=3GH/>bY^s{u' );
define( 'LOGGED_IN_KEY',    '{=?)G?#kd>kQhEi<#4Rf]}5&:QcLt1O17*qtEWsUasTDIO=t*xe@ia+s@-uZvxs:' );
define( 'NONCE_KEY',        'PJHR%s8ZI,%A0ri*NO/ &k#2+g;Uht4]jWI5ao }= z16Qvs!p9sEj>Ax^ZvhB]@' );
define( 'AUTH_SALT',        'DhU/T-k0]hE,C{(srx7`Ax FJs4&~,tgk*U~P&<RboN*jwjMa5%@&ZJ9_sD,@n|e' );
define( 'SECURE_AUTH_SALT', 'E`,Y2vWGonr3e%Ve4*MkX&AVjd-P5!j~j3W7U*&_,ws|nHjD3{v!l*b#~ee8,:jz' );
define( 'LOGGED_IN_SALT',   '4NKzmXkQMo@_8aVM1Jk;2Y=j$6&H]@[((snN[LXUa|Oc3pJM?n5?ME3>}lPqQlqH' );
define( 'NONCE_SALT',       'a0_{0aa@ppB[07R3.iAO_^{6@|D$)]DYW~!P+Co>g,ZV8m:{1Sa@-*%%%itw=vJ|' );

/**#@-*/

/**
 * Prefisso tabella del database WordPress.
 *
 * È possibile avere installazioni multiple su di un unico database
 * fornendo a ciascuna installazione un prefisso univoco. Solo numeri, lettere e trattini bassi!
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Aggiungere qualsiasi valore personalizzato tra questa riga e la riga "Finito, interrompere le modifiche". */



/* Finito, interrompere le modifiche! Buona pubblicazione. */

/** Path assoluto alla directory di WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Imposta le variabili di WordPress ed include i file. */
require_once ABSPATH . 'wp-settings.php';
