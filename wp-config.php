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
define('DB_NAME', 'eprojet');

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
define('AUTH_KEY',         'pcMPC/zi*R#2Za*@=#5pKc^Pc1#UX_3;ltte6x?d1^n>~[uKPfd$J&<]Q%g><6*>');
define('SECURE_AUTH_KEY',  'yeo6p~V Cap=%|tC=N6=h*FneI 9|yFI]I_rDbaKea?1qKtW]sp5!tcWu3 pnS*j');
define('LOGGED_IN_KEY',    '/iu9z0F-.BZFz(B!BuP6n5Xm75=GM$l3J*j!:1X:y[1kuyh~`7l4gu`ZT=AjYVHR');
define('NONCE_KEY',        'L2S0Elb{bd^T[sS!ITS*|>ZU3G:@Sx[x>t&Fov!?wTiwilw]hiUlV<dFo;.b}Rg1');
define('AUTH_SALT',        ';00U9v<@l#th7M&3/U)arO4x!Y+zVjNNwOE0f6nU%j5?^`+j8cCDL7U}4+vepTPk');
define('SECURE_AUTH_SALT', 'Mfl^#IDCT%0E7TLDo[1VT4;9Ypc~HS%g)fD^9UX6b4R&JfB/f7gW_k/j+Q4<=!C<');
define('LOGGED_IN_SALT',   '/-)[ J-Z+KP<fOfu)f8T`V,RB;WV}*,RJ.7+|DBv V9a[^y`I8eVZ^ks;Y$;+K.q');
define('NONCE_SALT',       'I%SdJa;m#Nw!ISgC)iOu[5/<fXw.%|<P#SoU,B-+oO35!F@82/:O<=#6K.Bu>~)-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wp_';

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