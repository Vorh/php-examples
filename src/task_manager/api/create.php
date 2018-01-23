
<?php

header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=UTF-8');
header("Access-Control-Allow-Methods: POST");
header("Access-Control-Max-Age: 3600");
header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");

include_once '../dataBase.php';
include_once '../todoDao.php';
include_once '../todo.php';



$dataBase = new DataBase();
$db = $dataBase->getConnection();

$dao = new TodoDao($db);

$data = json_decode(file_get_contents("php://input"));;
$todo = new Todo();
$todo->content = $data->content;
$todo->date = $data->data;


$dao->createTodo($_POST['todo']);
