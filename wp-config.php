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
define('DB_NAME', 'morphean2016');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'localhost');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         ')[95jXy|t;P!2&t2K*A169Gtz^4O@T*C|oM42?;x]d-=XjL.{1NkBM>9V_INj*@x');
define('SECURE_AUTH_KEY',  '&i}cbg`ewNpui0$*qoy4V+-!IC1+?!>70C|ZBct.wUj]7@d.Vq|kb6b!:X)3@tE-');
define('LOGGED_IN_KEY',    'CxL.cM1az 1TSL+^-}h*ftGK=nxHV>>gc-o#24Pr2gQsD&)H9jJa:?sVthHOI-aB');
define('NONCE_KEY',        'nLR17=f-~Pj9x|W<Xfx)/vZFmq}n14N1%h(tuy:}&$pzZ<25-&-jf#Eu_YPIC+|)');
define('AUTH_SALT',        '.k-*EW2-#sy$/Uv@9@pyk:YX%ZAw+KX]IwSC0x?-.k:1P18K>=h95e{p,?|rx:),');
define('SECURE_AUTH_SALT', '<x{o17y(2 S`S=}R<(8DDq5W|+ZFRW~+t^NaP`t#Q{mT*hCJvZZYYI{[V<@-m1`h');
define('LOGGED_IN_SALT',   '0tSg&h^<pR-owaZ6h4#[Ai+&x0#+6@mFumcoxE{%|D*^2(n-sp,.e5cw<rr<t6SV');
define('NONCE_SALT',       ';fd^545zDx>rR#--HEwp.,v6t-%PIgWOd-&hn`S/3W<M;*zBsOk1YFL?u:J||.Of');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'm0rph34n_2k16_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
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