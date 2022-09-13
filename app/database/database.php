<?php 
require 'config.php';
use Illuminate\Database\Capsule\Manager as Capsule;


$capsule = new Capsule;
$capsule->addConnection([
    'driver' => getenv('DRIVER'),
    'host' => getenv('HOSTNAME'),
    'database' => getenv('DATABASE'),
    'username' => getenv('USERNAME'),
    'password' => getenv('PASSWORD'),
    'charset' => 'utf8',
    'collation' => 'utf8_unicode_ci',
    'prefix' => '',
]);

$capsule->setAsGlobal();
$capsule->bootEloquent();



