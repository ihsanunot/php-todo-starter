<?php
require_once "../Model/ToDoList.php";
require_once "../BusinessLogic/ShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";
require_once "../BusinessLogic/RemoveTodoList.php";

addTodoList("Dart");
addTodoList("Flutter");
addTodoList("Rush Lang");
addTodoList("Javascript");
addTodoList("Ruby on Rails");

ShowToDolist();

removeTodoList(3);

showTodoList();

removeTodoList(1);

showTodoList();

// contoh error hapus nomor yang sudah tidak ada

$success = removeTodoList(5);
var_dump($success);

showTodoList();