<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'site_lycee' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', '' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'gVX57YtB~73)GMa4ElX6y?3Gl:[Jv$,gBVd42^G4zw0.W~@{ZrSXM{S4nAAD]RVX' );
define( 'SECURE_AUTH_KEY',  '9Gd//GxMU8K%etU[B:<0fZsxvZh7e[W{C>!cuc-{;fc>m[^{ TfP,bqS |?sLQEc' );
define( 'LOGGED_IN_KEY',    'g{Ef(5e%>Hm=x?ZD_6a&k=R?9D5kV;2 TX7HLr0qa~bB/.eR0bje?xmiM})O~Ike' );
define( 'NONCE_KEY',        'gjl.#QJ4B8-c5s*+0n0nGSxu5G)+G;<I$6?EN|o0!}`hF#z*gOwB<ll6-!dE?v@w' );
define( 'AUTH_SALT',        'gHffOKjm_nKoMdW!|U)wpWvhsoc<6#.hP3YB|7=Xe+^k#3YX7j]dq[~lg!([?S D' );
define( 'SECURE_AUTH_SALT', ')5[?:e1I&8V5u[H.o*B`zhmuw8t@xo,:_6xu$-<;)jp,Wde9)>V_9u[6E&:r<jnw' );
define( 'LOGGED_IN_SALT',   'OD*;,g8Oqw/#:<]e;$1p~=j,+ExeZg4YR9.I&DJ+=x]DZX_xsm1$FhHa;u4Bd70*' );
define( 'NONCE_SALT',       'T4^Y-$n9rnCSWL+9?}9TO!2|_)OYik`<{&:pPmg!?SqB<g-S)]V_SbTVV@bWCHEt' );
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
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
