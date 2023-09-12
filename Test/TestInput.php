<?php

require_once "../Helper/input.php";

$name = input("Name");
echo "Hello $name".PHP_EOL;

$umur = input("Age");
echo $umur.PHP_EOL;