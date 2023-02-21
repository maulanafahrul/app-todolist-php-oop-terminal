<?php


require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";
require_once __DIR__ . "/../View/TodolistView.php";
require_once __DIR__ . "/../Helper/InputHelper.php";

use \Entity\Todolist;
use \Repository\TodolistRepositoryImpl;
use \Service\TodolistServiceImpl;
use \View\TodolistView;

function testViewShowTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar piano");
    $todolistService->addTodolist("Belajar gitar");
    $todolistService->addTodolist("Belajar drum");

    $todolistView->showTodolist();
}
function testViewAddTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar piano");
    $todolistService->addTodolist("Belajar gitar");
    $todolistService->addTodolist("Belajar drum");

    $todolistService->showTodolist();
    
    $todolistView->addTodolist();
    
    $todolistService->showTodolist();


    
}
function testViewRemoveTodolist() {

    $todolistRepository = new TodolistRepositoryImpl();
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistView = new TodolistView($todolistService);

    $todolistService->addTodolist("Belajar piano");
    $todolistService->addTodolist("Belajar gitar");
    $todolistService->addTodolist("Belajar drum");

    $todolistService->showTodolist();
    
    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();
    
    $todolistView->removeTodolist();
    
    $todolistService->showTodolist();
    
}


testViewRemoveTodolist();