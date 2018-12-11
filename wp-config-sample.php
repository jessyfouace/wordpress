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
define('DB_NAME', 'votre base de données');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'votre identifiant');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'votre mot de passe');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', 'hégergeur sql');

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
define('AUTH_KEY', 'kuiN4f[??Au&%c|M7*rtsg>x]c+;|`Lx.D-d5^fAm1y>)c_gVci>DPV_{MOx4&ba');
define('SECURE_AUTH_KEY', 'Bprr3}Mc,rCqcYEk<`(K8CJ3qnZld|<Nw9{y)?1[i>fEP2]./mysvR `u~:*WR<a');
define('LOGGED_IN_KEY', 'tF7s[]H>yH26U$]qnHR=WC&j=Ci-;WUV5Q%(xJuMMKdJD3_%o)m>`i^2Jacbf`yy');
define('NONCE_KEY', 'AR;;zwyPwo f)Mg~~DjD.pC_~]_o85ndzP;do#=%oI+(<0<(`94yh(N.b &htF1D');
define('AUTH_SALT', 'UKww[G.CS|X3RR,l9QA$QfsY:q%(okTEm6oOVl+0%2,3QbUhIh[TYP<Wec9?IJi%');
define('SECURE_AUTH_SALT', 'ajaEX;7<$?l$h8WC);%H8}&OTx^l0<8<EZ|{|(&gm]Qs0GlMT$eUK+A5s!/9fJ$;');
define('LOGGED_IN_SALT', ')M<P~:)vti^eWR0n9Pcn_aZ r1vN!QTs1-,YuK<SI$pKEqZFsM{H~B5?d-=Akp$8');
define('NONCE_SALT', 'S|B[m<~j1U8{WS*:L_U.)Xo/Fea0fU[3({5LdSsX%A!0,bLq-t:2^>lS|h&<MMq-');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'wordpress_fym39dtz_';

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
define('FS_METHOD', 'direct');

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
