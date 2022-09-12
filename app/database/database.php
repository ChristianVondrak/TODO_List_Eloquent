<?php 
require 'config.php';
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;
$capsule->addConnection([
    'driver' => $bd_config['driver'],
    'host' => $bd_config['host'],
    'database' => $bd_config['database'],
    'username' => $bd_config['username'],
    'password' => $bd_config['password'],
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();



