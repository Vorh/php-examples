<?php
session_start();


include_once 'todoDao.php';
include_once 'todo.php';


if (!isset($_SESSION['username']) || empty($_SESSION['username'])) {
    header('location: login.php');
    exit;
}

echo $_SERVER['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Todo</title>
    <link rel="stylesheet" href="./style.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.4/js/all.js"></script>
    <script src="main.js"></script>
</head>
<body>
<div id="container">
    <div id="sidebar">
        <div class="item" onclick="location.href='logout.php';"><i class="fas fa-sign-out-alt"></i> Sign out</div>
    </div>
    <div id="content">
            <div class="panel">
                <div class="caption">TODOS</div>
                <div class="button">New Todo</div>
            </div>


            <div class="todos" id="scroll-bar">
            </div>

    </div>
</div>
</body>
</html>