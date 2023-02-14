<?php

namespace TodoListRepository {
    
    use Entity\TodoList;

    interface TodoListRepository {

        function save(TodoList $todoList): void;

        function remove(int $number): bool;

        function findAll(): array;
    }
}