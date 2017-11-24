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

if(!file_exists('.env')) { echo '.env file does not exist!'; }

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
define('WP_DEBUG_DISPLAY', $_ENV['WP_DEBUG_DISPLAY']);

/*
 * Define content paths.
 */
define('WP_CONTENT_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content');
define('WP_CONTENT_URL', $wpsite . '/wp-content');
define('WP_PLUGIN_DIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins');
define('WP_PLUGIN_URL', $wpsite . '/wp-content/plugins');
define('PLUGINDIR', $_SERVER['DOCUMENT_ROOT'] . '/wp-content/plugins');
define('UPLOADS', '/wp-content/uploads');


/**
 * Keys & salts.
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 */
define('AUTH_KEY',         '');
define('SECURE_AUTH_KEY',  '');
define('LOGGED_IN_KEY',    '');
define('NONCE_KEY',        '');
define('AUTH_SALT',        '');
define('SECURE_AUTH_SALT', '');
define('LOGGED_IN_SALT',   '');
define('NONCE_SALT',       '');

/*
 * Absolute path to the WordPress directory.
 */
if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

define('ALLOW_UNFILTERED_UPLOADS', true);

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
