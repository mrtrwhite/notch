<?php

require_once('vendor/autoload.php');

$dotenv = new Dotenv\Dotenv(__DIR__);
$dotenv->load();

return [
    'paths' => [
        'migrations' => __DIR__ . '/wp-content/migrations',
    ],
    'environments' => [
        'default_migration_table' => 'phinxlog',
        'default_database' => $_ENV['DB_NAME'],
        'production' => [
            'adapter' => 'mysql',
            'host' => $_ENV['DB_HOST'],
            'name' => $_ENV['DB_NAME'],
            'user' => $_ENV['DB_USER'],
            'pass' => $_ENV['DB_PASS']
        ],
    ],
];
