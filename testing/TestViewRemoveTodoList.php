<?php 

require_once "../modal/TodoList.php";
require_once "../businessLogic/AddTodoList.php";
require_once "../businessLogic/ShowTodoList.php";
require_once "../view/ViewRemoveTodoList.php";

// data dummy
addTodoList("davi");
addTodoList("sayang");
addTodoList("sesil");

showTodolist();

viewRemoveTodoList();

showTodolist();