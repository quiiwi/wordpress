<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', '02_wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', '');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '<GWr{sU^c|?j^LQ.~uN 8?FmonTbqx}Pb>&a7S!`g_MATKd>U+GA!d9NJET0EA,l');
define('SECURE_AUTH_KEY',  ',=2Y-bhSV|lf#/%[86!ulooHIocBf5KIf_M$p&w`Etzp1Ia)qbl6J$^,te-v.]B|');
define('LOGGED_IN_KEY',    '!hx-s#@V 51Bapd%%=7/LsrAYM<}<f.E_4OB,WE:Y!N^gOhAQV]P43=o`8DH`X,0');
define('NONCE_KEY',        '5Q6uH?p8|b4lkcR(1?RpAcZ>:7!7ne}LqIAiK$dex-HSmM11Kpq@rI]95EDz7Y @');
define('AUTH_SALT',        'MTl$1,+6_ 6QNg3IlOcp[QK]!4~ *INQ2Z!z]|,#=*TbK.Bu[{e*+D;SWGi1MGGm');
define('SECURE_AUTH_SALT', 'f,l(M~#b$uK/IrY_.LkBoq_w:{Opqv>`PF{4=G$PjsmZ s6$$9X{UknwhB:QFSGe');
define('LOGGED_IN_SALT',   '824&3s?(X/ g[rraqCie@bKVS7!487L1l2i&|P]<Q$@:)QS<q%zG6d,H>eIIk>nZ');
define('NONCE_SALT',       '<}[r^mt/m(=L^dRykA6VI8D!J:)l_I[.#sA^NB9(kglKqv6Mnc*DHgSB}*s]zC|u');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'xp_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');