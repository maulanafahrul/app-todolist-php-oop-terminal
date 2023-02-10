<?php 

require_once __DIR__ . "/../modal/TodoList.php";
require_once __DIR__ . "/../businessLogic/AddTodoList.php";
require_once __DIR__ . "/../helper/Input.php";

function viewAddTodoList()
{
    echo "MENAMBAHKAN TODOLIST" . PHP_EOL;

    $todo = input("Todo (Masukan x jika ingin membatalkan) ");

    if ($todo == "x"|| $todo == "X") {
        echo "Batal memasukan todo" . PHP_EOL;
    }else {
        addTodoList($todo);
    }
}