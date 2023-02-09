<?php 

require_once "../view/ViewAddTodoList.php";
require_once "../businessLogic/AddTodoList.php";
require_once "../businessLogic/ShowTodoList.php";

// data dummy
addTodoList("aaa");
addTodoList("bbb");
addTodoList("ccc");

viewAddTodoList();

showTodolist();

viewAddTodoList();

showTodolist();



