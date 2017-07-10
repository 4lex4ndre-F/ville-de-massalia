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
define('AUTH_KEY',         'Ur 3hL H+Xb]qA-y|kirQFXnJ;n4I*@Aie/gZ/yYt_p)|(>g&nS[e`ayh4p0U<9V');
define('SECURE_AUTH_KEY',  '2Y>dYp*]w+:^C!@Luql:wR1!,tmmGu`qCYJhKOmgK9i.9x}EZ+`Em#f!0mV55Ph#');
define('LOGGED_IN_KEY',    'bAc/TQ [%KE{yH64~Lb^LluVv{y&]V2Q[].]IX>f$wP$R;ti b.UutxH~gKd]#5`');
define('NONCE_KEY',        '%G?7)|BDaMb>5i40[R#emc^6|:h%Is6)Qo[H-(C#P1%95L^vyoSvGh<A]}2O1g-M');
define('AUTH_SALT',        'V=2fesx`{|V4P5)+GX:5Q@k3<}6!@IcXlmv|Q<NAr$p/3;?FK&|O,7]((51a4,Lm');
define('SECURE_AUTH_SALT', '!ZAaQtc[s>|(*QgK:hAFRDDe&TYjhZFktM1/`n`c.Xue_|^!iND$LKdKs:G.%.PO');
define('LOGGED_IN_SALT',   'TH_4AcaO(^>O=bBCE$j/YnxD`Q#Y;1txIV68Ikk}pxrr2C1<&V5) %s<5muC&&m+');
define('NONCE_SALT',       'u=A;UL#FJQ}rtc#9t^yT7#{xNTt LsD2^8GgJ(hfNL;{`5#LT`Uvw~3]p[cVZmJm');
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