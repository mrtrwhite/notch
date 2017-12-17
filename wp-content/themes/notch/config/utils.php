<?php

/*
 * ==== THEME UTILITIES ====
 */

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
 * Url-ify a path.
 *
 * @param $path
 */
function url($path) {
	return home_url($path);
}

/**
 * Get env variables.
 *
 * @param $path
 */
function env($var) {
	$excludes = array('DB_NAME', 'DB_USER', 'DB_PASS', 'DB_HOST');
	return !in_array($var, $excludes) ? getenv($var) : false;
}

/**
 * Creates a breadcrumb trail from the url.
 */
function crumbs() {
	$path = '';
	collect(explode('/', $_SERVER['REQUEST_URI']))->reject(function($row) {
		return empty($row);
	})->map(function($row) use (&$path) {
		$path = $path . $row . '/';
		return array(
			'title' => ucfirst($row),
			'url' => url($path)
		);
	});
}
