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
define( 'DB_NAME', 'itagricom' );

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
define( 'AUTH_KEY',         'Ej.[mG5} `n6B~yo4:,/Wd{.HU*F!Vn}l{VMQ~E|<Pf>|*ouzQ@Zyd3nTR9c2j;{' );
define( 'SECURE_AUTH_KEY',  '~~mFKkl3kh0:4jGFe oAsR)~u-yX@x_9e8}+,,S$*2*IZQ?,z6~IuU?nxpF)axiD' );
define( 'LOGGED_IN_KEY',    'vfs}eR ]^Y f}wyR[+^e:`u2lac)&DA<7uwj}DNJ7mm<2AUMpuK1X.Ax @$t9@69' );
define( 'NONCE_KEY',        '/+8)!s{0dWQ/~:hR82zlu45bX#*e4LsJ3A(nD99;?nlC+]xH.d*S^fd-59D&bl.7' );
define( 'AUTH_SALT',        'ffc{Iz:l3Pd)wa;s3AS5EVz%W&O2gbam!.dVpfl)8bID>3LYsZqFkZb|:Z{D(=E ' );
define( 'SECURE_AUTH_SALT', '|Lzbu*mpI7ep:2~L,_6Af,Nq=N*$g@~yJ%mMbittn@O9LWV+xQ>s]g#=01S7U;K6' );
define( 'LOGGED_IN_SALT',   'Y-,E.#I1 nRWhc1C)QJmNYk=N+&G{i}$H8hki/usTFCv;r^&KspT(02SoD-MnUly' );
define( 'NONCE_SALT',       'OQ4@XIor`+].5D-:|n++Z>zIdUig6Tm(,-;9D|:7oDU1v2YfK:K+[A5Y`oGN{vMW' );
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
