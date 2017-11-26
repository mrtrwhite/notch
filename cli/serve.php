<?php

require_once('vendor/autoload.php');

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Start the development server and task runner.
 *
 * @when before_wp_load
 */
$serve = function($args, $assoc_args) {
    $process = new Process('npm run dev');

    $process->run(function ($type, $buffer) {
        WP_CLI::line($buffer);
    });
};

WP_CLI::add_command('serve', $serve);
