<?php

/**
 * function untuk menambah todo di list
 */

function addTodoList(string $todo)
{
    global $todolist;

    $number = sizeof($todolist) + 1;

    $todolist[$number] = $todo;
}