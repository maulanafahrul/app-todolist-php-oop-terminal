<?php 

namespace Service {

    interface TodoListService {

        function showTodoList(): void;

        function removeTodoList(string $todo): void;

        function addTodoList(int $number): void;
    }
}