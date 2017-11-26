<?php

require_once('vendor/autoload.php');

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

/**
 * Make a new migration.
 *
 * <name>
 * : The migration name.
 *
 * @when before_wp_load
 */
$make = function($args, $assoc_args) {

    $process = new Process("php vendor/bin/phinx create {$args[0]} -c phinx.php");

    $process->run(function ($type, $buffer) {
        WP_CLI::line($buffer);
    });

    // WP_CLI::success("Migration {$args[0]} created.");
};
WP_CLI::add_command('make:migration', $make);

/**
 * Run the current migrations.
 *
 * @when before_wp_load
 */
$make = function($args, $assoc_args) {

    $process = new Process("php vendor/bin/phinx migrate -c phinx.php -e production");

    $process->run(function ($type, $buffer) {
        WP_CLI::line($buffer);
    });

    // WP_CLI::success("Migration completed.");
};
WP_CLI::add_command('migrate', $make);
