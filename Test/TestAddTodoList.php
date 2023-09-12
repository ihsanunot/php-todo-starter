<?php

require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Ayana");
addTodoList("Mona");
addTodoList("Sarah");

var_dump($todoList);