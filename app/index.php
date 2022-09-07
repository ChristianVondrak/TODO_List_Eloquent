<?php 
require '../vendor/autoload.php';
require 'database/database.php';
require 'models/Task.php';

//$task = $capsule::table('todos')->where('id','=','1')->get();


//d($task) ;

$task=Task::get();

d($task[0]->title);

// Task::create([
//     'title'=>'Crear prueba',
//     'checked'=>0
// ]);

$task=Task::find(1);
$task->update([
    'title'=>'Hola mundo'
]);
$task->save;