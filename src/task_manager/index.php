<?php


include 'dao.php';
include 'todo.php';


//$dao = new TodoDao();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="./style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script  src="main.js"></script>
</head>
<body>
<div id="root">
    <div class="panel">
        <div class="caption">TODOS</div>
        <div class="button">New Todo</div>
    </div>


    <div class="todos" id="scroll-bar">

<!--        --><?php
////        $todos = $dao->getListTodo();
//        $todos = null;
//
//        foreach ($todos as $todo) {
//
//            echo '<div class="todo">';
//            echo '<div class="box-line">';
//            echo '<div class="caption-t">' . $todo->content . '</div>';
//            echo '<div class="btn-t-complete"><i class="fas fa-check"></i></div>';
//            echo '</div>';
//            echo '<div class="box-line">';
//            echo '<div class="date-t">Due:' . $todo->date . '</div>';
//            echo '<div class="btn-t-delete"><i class="fas fa-trash"></i></div>';
//            echo '</div>';
//            echo '</div>';
//            echo '<div class="separator-todes"></div>';
//        }
//        ?>
    </div>

</div>
</body>
</html>