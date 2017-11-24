<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

require_once('vendor/autoload.php');

if(!file_exists("{$_SERVER['DOCUMENT_ROOT']}/.env")) { echo '.env file does not exist!'; }

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

define('WP_ENV', $_ENV['WP_ENV']);

/*
 * Define database credentials.
 */
define('DB_NAME', $_ENV['DB_NAME']);
define('DB_USER', $_ENV['DB_USER']);
define('DB_PASSWORD', $_ENV['DB_PASS']);
define('DB_HOST', $_ENV['DB_HOST']);
define('WP_SITEURL', $_ENV['WP_SITE'] . '/wp');
define('WP_HOME', $_ENV['WP_SITE']);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix  = 'wp_';

/*
 * Set debug constants.
 */
define('WP_DEBUG', $_ENV['WP_DEBUG']);
define('WP_DEBUG_LOG', $_ENV['WP_DEBUG']);
define('WP_DEBUG_DISPLAY', $_ENV['WP_DEBUG_DISPLAY']);

if($_ENV['WP_ENV'] === 'development' || $_ENV['WP_ENV'] === 'staging') {
    error_reporting(E_ERROR);
}

/*
 * Define content paths.
 */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', $wpsite . '/wp-content');
define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins');
define('WP_PLUGIN_URL', $wpsite . '/wp-content/plugins');
define('PLUGINDIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins');
define('UPLOADS', '/wp-content/uploads');
define('WP_DEFAULT_THEME', $_ENV['WP_THEME']);

/**
 * Keys & salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         '*nj%$b[rIeAG;4=bE+0{;;}xTE?9+GSi|$qo?a-Pm`5|?,vFn@d-`+3A`d0|T63C');
define('SECURE_AUTH_KEY',  'Adk5.!xRO%3!+vzhby)9:PZM/RQBXU$F5FSsgmhfN{-=&A$*7+v.X9nV.mS9X1f]');
define('LOGGED_IN_KEY',    '*dO-Hgnu(xY#Fo*M_f|/wb]]O<%hTNrQ5j+o|Hh6,m`-F{013fbhc1Q:-IWrbmN#');
define('NONCE_KEY',        '}=w7h+Wj!]l<;?ke;d_1jlgtL$z0+l*Nyhd.5nx{)^Y;,*Be<I-I*qW(?qbMSPOy');
define('AUTH_SALT',        'v QFxa0Je|D)l4qJ8</p-bJIw@u-`dk}gkPuEM/c7SkT=|xP}nd|p7bnL:SjM+ l');
define('SECURE_AUTH_SALT', '<}Fp1Z8z/do-];VO,fG:%WG>5JJA-qSd;(cq7ugX-v3|?!Wr;J&E8J w&s):(KR:');
define('LOGGED_IN_SALT',   'Z0b0!6|J1-XwHR+Q;Qx|%3Tt5bqz`6?Bh xlD=o$.U&->OVZ`^#*I xZ9ya4[;{$');
define('NONCE_SALT',       '|.8]z0]$C-dpedLE8Q|cD4|mg;EoW7$hhrE<z<J=5sJfpyPzQQ=v#u^2w+moc7)*');

/*
 * Absolute path to the WordPress directory.
 */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

define('ALLOW_UNFILTERED_UPLOADS', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
