<?php

require_once __DIR__ . "/../Entity/Todolist.php";
require_once __DIR__ . "/../Repository/TodolistRepository.php";
require_once __DIR__ . "/../Service/TodolistService.php";

use Repository\TodoListRepository;
use Service\TodoListServiceImpl;
use Repository\TodoListRepositoryImpl;

function testShowTodoList(): void 
{
    $todoListRepository = new TodoListRepositoryImpl();
    $todoListRepository->todoList[1] = "belajar mtk";

    $todoListService = new TodoListServiceImpl($todoListRepository);

    $todoListService->showTodoList();
}

testShowTodoList();