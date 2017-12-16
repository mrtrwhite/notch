<?php

function recurse_copy($src, $dst) {
    $dir = opendir($src);
    @mkdir($dst);
    while(false !== ( $file = readdir($dir)) ) {
        if(($file != '.') && ($file != '..')) {
            if(is_dir($src . '/' . $file)) {
                recurse_copy($src . '/' . $file,$dst . '/' . $file);
            } else {
                copy($src . '/' . $file,$dst . '/' . $file);
            }
        }
    }
    closedir($dir);
}

/**
 * Make a new notch theme.
 *
 * <name>
 * : The theme name.
 *
 * @when before_wp_load
 */
$theme = function($args, $assoc_args) {

    $starter_theme_dir = __DIR__ . '/notch-starter-theme';

    $theme_dir = $_SERVER['PWD'] . "/wp-content/themes/{$args[0]}";

    mkdir($theme_dir, 0755);

    recurse_copy($starter_theme_dir, $theme_dir);

    WP_CLI::success("Theme '{$args[0]}' created.");
};
WP_CLI::add_command('notch theme', $theme);
