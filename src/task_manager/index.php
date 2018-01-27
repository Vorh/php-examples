<?php
session_start();


include_once 'todoDao.php';
include_once 'todo.php';


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
    <div id="sidebar">
        <div class="logo">
            <diV class="inner-box"><i class="fas fa-database"></i><span>TD</span>
            </diV>
        </div>
        <div class="combox" onclick="location.href='index.php?create';"><p>New todo</p></div>
        <div class="item" onclick="location.href='logout.php';"><i class="fas fa-sign-out-alt"></i> Sign out</div>
    </div>
    <div id="content">


        <?php

        if (isset($_GET['create'])) {
            echo '<div class="create-todo">
                <h1 class="caption">CREATE NEW TODO</h1><br>
                <form id="create-new-todo">
                    <label>Name</label><br>
                    <input class="name border-red" type="text" name="name"><br>
                    <label>Notes</label><br>
                    <textarea class="notes border-red" name="notes" form="create-new-todo"></textarea><br>
                    <input type="submit" class="btn-create-todo" value="Create todo">
                </form>
            </div>';

        } else {
            echo '< div class="todos" id = "scroll-bar" > </div > ';
        }

        ?>


    </div>
</div>
</body>
</html>