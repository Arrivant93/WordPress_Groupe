<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'Test' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'i1j*u/`e9lup}.ev19]yZ@Y[<ewh|NX=I6Q^/aaOLnrCB:k%_kSs/YF{qeR~WM:@' );
define( 'SECURE_AUTH_KEY',  'fjpD0l]qPua[wK/8Z&!qL3Xi_DJ5A2U`.In_~~Vc)S0c9Y+i6C0cb6#$L4u>B:wn' );
define( 'LOGGED_IN_KEY',    'Fb#f6gsKQkvL4$>XbTP3rItiIwJsMo[=wGg}(|qR|9+FA-!7ntwmV5$c{2E/LRMw' );
define( 'NONCE_KEY',        '<w8$SL@5D<J$d7})BQn+3}%#3 p= ;F_}<!psWwiSR$5xW<gifA45(St<DN^S1D}' );
define( 'AUTH_SALT',        'Jk%a.Y*^n5KQ2P(M|nL#cKigQ2a?{,{bEhpP,s$C} g8cekhJ]% j)@oKBQsK7qX' );
define( 'SECURE_AUTH_SALT', 'q|xU8gg,Qy@MNGp#<kB+{<&DRgyRQOrbw*h-eXz%;Emz)6GNiF9Ld]?XA1#Z!fEe' );
define( 'LOGGED_IN_SALT',   'G<z 89e9f-k)1-4g#t}tref,K9uZH/{Yo+1yB+IYeEaUzB$(~iF+5w>/jCq;s#]p' );
define( 'NONCE_SALT',       'boK2</a7=)vwxM)^YTxm*^`y<e5dwLl2palcc_369Bms0KX[cSLe0m<;l#OP0QL&' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );
