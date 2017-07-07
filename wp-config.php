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
define('DB_NAME', 'ville_de_massalia');

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
define('AUTH_KEY',         'N:.MNYLrRnd|!B$i+:#?ww(S#)=w2vs3~dNmL7e>>xHp>0*P_1y>HCsj4oQ0_!3P');
define('SECURE_AUTH_KEY',  'CtBa5Qv)i0GJ^IOS~TB%Gf29?s``r)CT29kBQS!Na~/.ZWbiF6j<)7Y%ZKE`2O&W');
define('LOGGED_IN_KEY',    ' OXko68?PNWI@@|eV-kbX;I2!qpA`5bO^)}qv;q-:>+cSG<a-n:<7ofJ2YrIkR2Z');
define('NONCE_KEY',        'cg~gp$v%~KpH6^5Z-_sE?TU,=tR=_^Q:St4^jI-c9b,Xop./|wP[MV?m}blJG5%S');
define('AUTH_SALT',        '&EO1JuS3}$YUEncVRwG{g+zh5h-=>dL{xy~T|Lv8}PQ;VYh,&#*ETl9LY&B|D,b8');
define('SECURE_AUTH_SALT', 'n`]@@p~=%Be`RPmoz9Mz;V5[s*^y>;08>z^%cZ*::>%7kGT{XC6uHG-&4{{ZNt7O');
define('LOGGED_IN_SALT',   'P#J(SpoB@M088[^Qt,H,tW~%|AEYRjGc,[[::pK4X30 (MV/U4B5J/4%`vE/7a#1');
define('NONCE_SALT',       'EeT&cSf#J!VGR/@wr+]ok,wJSCNwZs00[W_9>dH8Fw*3970I@uyd[@]B7eMV&Yu]');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'xdfs_';

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