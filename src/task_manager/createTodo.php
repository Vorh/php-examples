<?php


include_once 'dao/dataBase.php';
include_once 'dao/todoDao.php';

$dataBase = new DataBase();
$db = $dataBase->getConnection();

$dao = new TodoDao($db);


if ($_SERVER['REQUEST_METHOD']==='POST'){

    $todo = new Todo();

    $todo->content = validateInput($_POST['content']);
    $todo->caption = validateInput($_POST['caption']);
    $todo->userId = $_SESSION['id'];

    $dao->createTodo($todo);

    header("location: index.php");

}

?>



<div class="create-todo">
    <h1 class="caption">CREATE NEW TODO</h1><br>
    <form id="create-new-todo" method="POST" action="index.php">
        <label>Name</label><br>
        <input class="name border-red" type="text" name="name"><br>
        <label>Notes</label><br>
        <textarea class="notes border-red" name="notes" form="create-new-todo"></textarea><br>
        <input type="submit" class="btn-create-todo" value="Create todo">
    </form>
</div>