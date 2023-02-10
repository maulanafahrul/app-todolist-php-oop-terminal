<?php 

require_once __DIR__ . "/modal/TodoList.php";
require_once __DIR__ .  "/businessLogic/AddTodoList.php";
require_once __DIR__ .  "/businessLogic/ShowTodoList.php";
require_once __DIR__ .  "/businessLogic/RemoveTodoList.php";
require_once __DIR__ .  "/view/ViewAddTodoList.php";
require_once __DIR__ .  "/view/viewRemoveTodoList.php";
require_once __DIR__ .  "/view/ViewShowTodoList.php";
require_once __DIR__ .  "/helper/Input.php";

echo "APP TODOLIST" . PHP_EOL; 

viewShowTodoList();
