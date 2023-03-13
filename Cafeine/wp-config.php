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
define( 'DB_NAME', 'cafeine' );

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
define( 'AUTH_KEY',         'Av~hv@=C0H*!L0(Da7GOeV-cYj&-u#~Wr/3@7[wZS%(@wpBGrh4*%)34>$SkSSvH' );
define( 'SECURE_AUTH_KEY',  'H[B^OX?Y!pDfmcH!^^H+|ae10k/r{YPLXxX>S1$@!aVd01kBx$I6_3DiG&n~yP/$' );
define( 'LOGGED_IN_KEY',    '?Nw-Fe=6$5?YWJdf  .o}(Nlc8O]&X@7gqMh;].CbW7fN[kcB/)mR:ux;CX>LN2j' );
define( 'NONCE_KEY',        '7$5F,0Ic0dqdDjeBnRA>QiaXI?HOEKAOv5K`wEdwaH1AGtd!Er4:&Qv, Ld*7bVr' );
define( 'AUTH_SALT',        '2fmEfzquSH3xN$=]5{QlP87fD5*YJW @4cpe0Ej-]k`p_1D_}qtLb[Q{,?:8kN@V' );
define( 'SECURE_AUTH_SALT', 'J jrGFd$^i|!AmoLZ|1UuvOyL+89J/LsE PiH$~opTCydSWcsMF$9mT7+>CL fYB' );
define( 'LOGGED_IN_SALT',   '}0-Ig41v.^+eM6K{&Jz#~[5$s-KmJH4VDfL~b`k7L#3@3JXe?y_d0hrPndGu(IF ' );
define( 'NONCE_SALT',       '5wPmmo:04@t+[L(ZhvMFrRVdHxB4^M:Wf~Aya02]He>0],+7f}e= o_09Cpqz~BS' );
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
