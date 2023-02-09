<?php

require_once "../view/ViewShowTodoList.php";
require_once "../businessLogic/AddTodoList.php";

addTodoList("aku");
addTodoList("sayang");
addTodoList("kamu");

viewShowTodoList();