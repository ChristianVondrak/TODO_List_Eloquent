<?php

require 'vendor/autoload.php';
require 'app/database/database.php';
require 'app/models/Task.php';

use Carbon\Carbon;
use App\Task;

$task = Task::all();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="app/css/style.css">
    <title>To-Do List</title>
</head>

<body>
    <div class="main-section">
        <div class="add-section">
            <form action="app/controllers/add.php" method="POST" autocomplete="off">
                <?php if (isset($_GET['mess']) && $_GET['mess'] == 'error') { ?>
                    <input type="text" name="title" placeholder="This field is required" style="border-color:#ff6666">
                <?php } else { ?>
                    <input type="text" name="title" placeholder="What do you need to do">
                <?php } ?>
                <button type="submit">Add &nbsp;<span>&#43;</span></button>
            </form>
        </div>

        <?php

        ?>

        <div class="show-todo-section">
            <?php if (Task::get()->count() <= 0) { ?>
                <div class="todo-item">
                    <div class="empty">
                        <img src="app/img/f.png" width="100%">
                        <img src="app/img/Ellipsis.gif" width="80px">
                    </div>
                </div>
            <?php } ?>


            <!-- Trae de la DB todas las Task -->
            <?php foreach ($task as $t) { ?>
                <div class="todo-item">
                    <span id="<?php echo $t->id; ?>" class="remove-to-do">x</span>
                    <p id="<?php echo $t->id; ?>" class="edit">Edit</p>
                    <p id="<?php echo $t->id; ?>" class="hidden confirm">Confirm</p>
                    <input type="text" name="edit" id="myInput" class="hidden input-edit" autocomplete="off" placeholder="New Title">
                    <?php if ($t->checked) { ?>
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $t->id; ?>" checked>
                        <h2 class="checked"><?php echo $t->title; ?></h2>
                    <?php } else { ?>
                        <input type="checkbox" class="check-box" data-todo-id="<?php echo $t->id; ?>">
                        <h2><?php echo $t->title; ?></h2>
                    <?php } ?>
                    <small><?php echo '<b>Created at</b> ' . $t->created_at . ' (' . $t->created_at->diffForHumans() . ')' ?></small>
                    <small><?php echo '<b>Updated at</b> ' . $t->updated_at . ' (' . $t->updated_at->diffForHumans() . ')' ?></small>
                </div>
            <?php } ?>

        </div>
    </div>


    <script src="app/js/jquery-3.2.1.min.js"></script>
    <script src="app/js/functions.js"></script>   

    <?php require 'app/views/footer.php' ?>
</body>

</html>