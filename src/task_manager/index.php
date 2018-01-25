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
    <link rel="stylesheet" href="https://unpkg.com/js-datepicker/datepicker.css">
    <script src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
     <script src="https://unpkg.com/js-datepicker"></script>
    <script src="static/main.js"></script>
    <script>
        window.onload = getListTodo(<?php echo $_SESSION['id'];?>);

        const picker = datepicker('#test');
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


        if (isset($_GET['create'])){
            echo '<div class="create_todo">
<span>CREATE NEW TODO</span>
<form id="create-new-todo">

<label>Name</label>
<input type="text" name="name">
<label>Notes</label>
<textarea name="notes" form="create-new-todo"></textarea>
<label>Due Date</label>
<input id="test">
</form>
</div>';
        }else {
           echo '<div class="todos" id="scroll-bar"> </div>';
        }

        ?>



    </div>
</div>
</body>
</html>