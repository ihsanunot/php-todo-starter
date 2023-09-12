<?php

function addTodoList(string $todo){
    // import model array
    global $todoList;

        $number = sizeof($todoList) + 1;

        $todoList[$number] = $todo;

}