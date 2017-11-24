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

define('WP_ENV', 'dev');

if(WP_ENV === 'dev') {
    $dbname             = 'notch';
    $dbuser             = 'notch';
    $dbpass             = '2@gSI0mb8J!p';
    $dbhost             = 'localhost';
    $wpsite             = 'http://notch.local';
    $wpdebug            = true;
    $wpdebug_display    = true;

} else if(WP_ENV === 'staging') {
    $dbname             = '';
    $dbuser             = '';
    $dbpass             = '';
    $dbhost             = '';
    $wpsite             = '';
    $wpdebug            = true;
    $wpdebug_display    = true;
} else {
    $dbname             = '';
    $dbuser             = '';
    $dbpass             = '';
    $dbhost             = '';
    $wpsite             = '';
    $wpdebug            = false;
    $wpdebug_display    = false;
}

/*
 * Define database credentials.
 */
define('DB_NAME', $dbname);
define('DB_USER', $dbuser);
define('DB_PASSWORD', $dbpass);
define('DB_HOST', $dbhost);
define('WP_SITEURL', $wpsite . '/wp');
define('WP_HOME', $wpsite);
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

$table_prefix  = 'wp_';

/*
 * Set debug constants.
 */
define('WP_DEBUG', $wpdebug);
define('WP_DEBUG_DISPLAY', $wpdebug_display);

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
