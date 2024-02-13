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
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

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
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '6A %9u?Bjy!VZ!iI%xfc+CzZsXW:UH#8<:Ls[)aR.[a79syL7G|vD)=V%^|G^;=>' );
define( 'SECURE_AUTH_KEY',  'CY!kliH%U~.?6)m 2?0C&d5L1Z:A+n} {x2&DUh!.gB?2s)u=%mu+/7UdxQf]nje' );
define( 'LOGGED_IN_KEY',    '2Qs`.[>Mg)IIK2_cdw,PeyH-dZ+/S#|s~Mo7YL8`fT^$eMs/0.5N)bU7GrZHrmGD' );
define( 'NONCE_KEY',        'L3n([iB.gNvtPf&bghw02?z4t_!fwd@4( rJoJ;K;jg/&iU7Q $%wcP-]sL64 Uc' );
define( 'AUTH_SALT',        'DVwG9kl/Tv&&zn1 ZTUL^*@-f4OL^8{=Y+Y+hi`]NL_LQ;#ld.(yG0bdOjyL2145' );
define( 'SECURE_AUTH_SALT', '#|r2,`P?s(7}d9DEF>S49czt-piFlbg9h)2aX~M;dH4meL=Ke689ghUIIf1HngFu' );
define( 'LOGGED_IN_SALT',   'XEQf*2PX#8`pt6,Ks0GZQrb~(BB2v#Ojb(KO,+B=&7F.N{Jkw6L{UH;77uRNI$xd' );
define( 'NONCE_SALT',       '.V%rq4Fr{ILSkp|KB1n=OF, bko%)D-+MtTxiJYJE~K#tSthg^;v9a4l@nBii1K+' );
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
 * Il est fortement recommandé que les développeurs et développeuses d’extensions et
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
