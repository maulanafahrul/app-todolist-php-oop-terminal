<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";


use Entity\Todolist;
use Service\TodolistServiceImpl;
use Repository\TodolistRepositoryImpl;

function testShowTodolist(): void 
{
    $todolistRepository = new TodolistRepositoryImpl();
    $todolistRepository->todolist[1] = new Todolist("belajar piano");
    $todolistRepository->todolist[2] = new Todolist("belajar gitar");

    $todolistService = new TodolistServiceImpl($todolistRepository);

    $todolistService->showTodoList();
}
function testAddTodolist(): void 
{
    $todolistRepository = new TodolistRepositoryImpl();
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar piano");
    $todolistService->addTodolist("Belajar gitar");
    $todolistService->showTodolist();
}
function testRemoveTodolist(): void 
{
    $todolistRepository = new TodolistRepositoryImpl();
    
    $todolistService = new TodolistServiceImpl($todolistRepository);
    $todolistService->addTodolist("Belajar piano");
    $todolistService->addTodolist("Belajar gitar");

    $todolistService->showTodolist();
    
    $todolistService->removeTodolist(1);
    $todolistService->showTodolist();
    
    $todolistService->removeTodolist(4);
    $todolistService->showTodolist();

}

testRemoveTodolist();