<?php

if (class_exists('Timber') && WP_ENV === 'production') {
    Timber::$cache = true;
}

function theme_setup() {
    add_action('init', 'register_post_types');
}
add_action('after_setup_theme', 'theme_setup');
