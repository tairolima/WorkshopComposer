<?php
ini_set('default_charset', 'utf-8');
ini_set('display_errors',1);
ini_set('display_startup_erros',1);
ini_set('error_reporting', E_ALL);
error_reporting(E_ALL);


require __DIR__ . '/vendor/autoload.php';

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

print_r($_ENV);

