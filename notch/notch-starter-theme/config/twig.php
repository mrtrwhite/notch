<?php

/**
 * Convert a hex colour to rgb.
 *
 * @param $hex
 * @param $opacity
 */
function hextorgb($hex, $opacity = 1) {
	$rgb = join(',', sscanf($hex, "#%02x%02x%02x"));
    return "rgba({$rgb},{$opacity})";
}

/**
 * Register twig filters.
 *
 * @param $twig
 */
function twig_filters($twig) {
	$twig->addFilter('hextorgb', new Twig_Filter_Function('hextorgb'));
	return $twig;
}
add_filter('get_twig', 'twig_filters');
