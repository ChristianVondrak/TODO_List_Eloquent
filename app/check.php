<?php 

require '../vendor/autoload.php';
require 'database/database.php';
require 'models/Task.php';
use App\Task;


 if(isset($_POST['id'])){  
     
    $id= $_POST['id'];
    // echo $id;
    if (empty($id)){
        echo 'error';
    }else{
        $task = Task::find($id);
        $uId = $task->id;
        $checked = $task->checked;

        $uChecked = $checked ? 0 : 1;
        $task->checked=$uChecked;
        $task->save();
        // exit();
        // echo $checked;
        
        if($task){
            echo $checked;
           
        }else{
            echo "error";
        }
        exit();
    }
 }else{
    // header("Location: index.php?mess=error");
 }




