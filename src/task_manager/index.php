<?php
session_start();


include_once 'dao/todoDao.php';
include_once 'model/todo.php';


if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('location: login.php');
    exit;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo</title>
    <link rel="stylesheet" href="static/style.css">
    <script src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script src="static/main.js"></script>
    <script>
        window.onload = getListTodo(<?php echo $_SESSION['id'];?>);

    </script>
</head>
<body>
<div id="container">
    <?php include 'sidebar.php'?>
    <div id="content">
        <?php

        if (isset($_GET['create'])) {
            include 'createTodo.php';
        } else {
            echo '< div class="todos" id = "scroll-bar" > </div > ';
        }

        ?>


    </div>
</div>
</body>
</html>