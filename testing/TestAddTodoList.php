<?php 

require_once "../modal/TodoList.php";
require_once "../businessLogic/AddTodoList.php";
require_once "../businessLogic/ShowTodoList.php";

addTodoList("Belajar menulis");
addTodoList("Belajar membaca");
addTodoList("Belajar menghapus");

showTodolist();