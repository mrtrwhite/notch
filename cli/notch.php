<?php

/**
 * Make a new notch theme.
 *
 * <name>
 * : The theme name.
 *
 * @when before_wp_load
 */
$theme = function($args, $assoc_args) {

    $theme_dir = $_SERVER['PWD'] . "/wp-content/themes/{$args[0]}";

    $files = [
        '/assets/img/.gitkeep',
        '/assets/js/main.js',
        '/assets/sass/main.scss',
        '/assets/sass/tailwind.scss',
        '/assets/svg/.gitkeep',
        '/config/navigations.php',
        '/config/options.php',
        '/config/post_types.php',
        '/config/setup.php',
        '/config/taxonomies.php',
        '/config/twig.php',
        '/config/utils.php',
        '/controllers/bar.php',
        '/inc/css/app.css',
        '/inc/img/.gitkeep',
        '/inc/js/bundle.js',
        '/views/base.twig',
        '/views/home.twig',
        '/views/page.twig',
        '/functions.php',
        '/index.php',
        '/routes.php',
        '/styles.css'
    ];

    mkdir($theme_dir, 0755, true);

    foreach ($files as $key => $file) {
        $file = $theme_dir . $file;
        if(!file_exists($file)) {
            mkdir(dirname($file), 0755, true);
        }
        fopen($file, 'w');
        chmod($file, 0644);
    }

    WP_CLI::success("Theme {$args[0]} created.");
};
WP_CLI::add_command('notch theme', $theme);
