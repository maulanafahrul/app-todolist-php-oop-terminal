<?php 

require_once __DIR__ . "/../modal/TodoList.php";
require_once __DIR__ . "/../view/ViewAddTodoList.php";
require_once __DIR__ . "/../view/ViewRemoveTodoList.php";
require_once __DIR__ . "/../businessLogic/ShowTodoList.php";
require_once __DIR__ . "/../helper/Input.php";

function viewShowTodoList()
{
    while(true) {
        showTodolist();

        echo "MENU PILIHAN" . PHP_EOL;
        echo "1. menambah todo" . PHP_EOL;
        echo "2. menghapus todo" . PHP_EOL;
        echo "x. keluar" . PHP_EOL;

        $pilihan = strtolower(input("pilih ")); 

        if($pilihan == "1") {
            viewAddTodoList();
        }else if($pilihan == "2") {
            viewRemoveTodoList();
        }else if($pilihan == "x") {
            break;
        }else {
            echo "Pilihan yang anda masukan tidak dapat dimengerti" . PHP_EOL;
        }
    }

    echo "Sampai Jumpa Lagi" . PHP_EOL;
}