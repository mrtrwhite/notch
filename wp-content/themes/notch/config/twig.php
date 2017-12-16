<?php

/*
 * ==== TWIG EXTENSIONS ====
 */

/**
 * Register twig filters.
 *
 * @param $twig
 */
function twig_filters($twig) {
	$twig->addFilter('hextorgb', new Twig_Filter_Function('hextorgb'));
	$twig->addFunction(new Timber\Twig_Function('url', 'url'));
	$twig->addFunction(new Timber\Twig_Function('env', 'env'));
	return $twig;
}
add_filter('get_twig', 'twig_filters');
