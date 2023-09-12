<?php

require_once "../View/ViewShowTodoList.php";
require_once "../BusinessLogic/AddTodoList.php";

addTodoList("Ayana");
addTodoList("Shahab");
addTodoList("Makan");
addTodoList("Minum");
addTodoList("Tidur");

viewShowTodoList();