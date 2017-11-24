<?php

$d = Timber::get_context();

$d['post'] = Timber::get_post();

$templates = array('page.twig');

if (is_home()) {
    array_unshift($templates, 'home.twig');
}

Timber::render($templates, $d);
