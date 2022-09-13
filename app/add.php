<?php 

require '../vendor/autoload.php';
require 'database/database.php';
require 'models/Task.php';
use App\Task;

 if(isset($_POST['title'])){  
    $title= $_POST['title'];

    if (empty($title)){
        header("Location: ../index.php?mess=error");
    }else{
        $task = new Task;
        $task->title = $title;
        $task->save();
        if($task){
            header("Location: ../index.php?mess=success");
        }else{
            header("Location: ../index.php");
        }
        exit();
    }
 }else{
    header("Location: ../index.php?mess=error");
 }




