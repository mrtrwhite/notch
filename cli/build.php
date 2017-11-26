<?php

require_once('vendor/autoload.php');

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Build static theme assets.
 *
 * @when before_wp_load
 */
$build = function($args, $assoc_args) {
    $process = new Process('npm run production');

    $process->run(function ($type, $buffer) {
        WP_CLI::line($buffer);
    });
};

WP_CLI::add_command('notch build', $build);
