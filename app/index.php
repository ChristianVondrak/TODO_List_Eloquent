<?php 

require '../vendor/autoload.php';
require 'database/database.php';
require 'models/Task.php';

//$task = $capsule::table('todos')->where('id','=','1')->get();

use App\Task;
//d($task) ;

// $task=Task::get();

// d($task[0]->title);

// Task::create([
//     'title'=>'Crear prueba',
//     'checked'=>0
// ]);

$task=App\Task::find(1);
$task->title='NEW TITLE';
$task->save();


//EL UNICO QUE FUNCIONA

// $capsule::table('todos')->insert([
//     'title'=>'Un nuevo task',
//     'checked'=>0
// ]
// );

