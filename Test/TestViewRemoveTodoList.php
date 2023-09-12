<?php

require_once "../Model/ToDoList.php";
require_once "../View/ViewRemoveTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/ShowTodoList.php";

addTodoList("Ayana");
addTodoList("Mona");
addTodoList("Neno");
addTodoList("Balqis");
addTodoList("Ann");
addTodoList("Roxy");

showTodoList();

viewRemoveTodoList();

showTodoList();