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
define( 'DB_NAME', 'wordpressbase' );

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
define( 'AUTH_KEY',         'h.ux9Qdt_s2!`R0_gK_,<VE.4Ej,V8dB:qo0u]|);G0NDK}yQQEREVu9(Jj:B,`|' );
define( 'SECURE_AUTH_KEY',  'e5O&[pLFw{^*_D;0O>H}(k7fv.&OvLN5{~FoX7hh>%WLS+8vt=&I@gt&q{}~+r/U' );
define( 'LOGGED_IN_KEY',    'fy)=vhP@C$[Po[CJ,kUZ3}sB;:0pp2ubdK?Xy=*_ *]H]:H+lhj2.^;(8PPeL,=>' );
define( 'NONCE_KEY',        'Ihr(H^~bh>bT}h9L&:ZQ0P?g7&cc2nFT<L(HWG;D~L<[2~@)Aq7wkB/(B-ThQ;GW' );
define( 'AUTH_SALT',        'j_C.;Ppq9/J+o[i_RrE32J!uuW*qu_bEKwU3E>:6Orl;Sc7K@0MW9`o4|kCS9$HP' );
define( 'SECURE_AUTH_SALT', 'Pui3.~Q)D7m14J~ql_|nn`u!?/-}tWJP}Vj*j+e.pYOC`*o4!fr9#]FcF@h?=P?m' );
define( 'LOGGED_IN_SALT',   '4CO@GzO+w;IZ5*1-5a?;VH`.WXyxG`>U!_0gd&*AIFO}0_&O(7gPe&GiCDl;U5#=' );
define( 'NONCE_SALT',       '/bhP;c+GXkuWlBWIWEI19Lr4=<.<~SZ2-ljhA<*St:*~>:Qnvn(3H0N=MS@U1K3N' );
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
