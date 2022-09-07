<?php 

require '../vendor/autoload.php';
require 'database/database.php';
require 'models/Task.php';
use App\Task;

 if(isset($_POST['id'])){  
    $id= $_POST['id'];

    if (empty($id)){
        echo 0;
    }else{
        $task = Task::find($id);
        $task->delete();
        if($task){
           echo 1;
        }else{
           echo 0;
        }
        exit();
    }
 }else{
    header("Location: index.php?mess=error");
 }




