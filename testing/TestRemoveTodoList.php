<?php 

require_once "../modal/TodoList.php";
require_once "../businessLogic/RemoveTodoList.php";
require_once "../businessLogic/ShowTodoList.php";
require_once "../businessLogic/AddTodoList.php";


addTodoList("aku");
addTodoList("sayang");
addTodoList("kamu");
addTodoList("tapi");
addTodoList("boong");

showTodolist();

removeTodoList(5);
removeTodoList(4);
showTodolist();

$success = removeTodoList(1);
showTodolist();
var_dump($success);

