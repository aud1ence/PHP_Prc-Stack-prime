<?php

include_once "app/Stack.php";

$test = new Stack();
$test->push(1);
$test->push(2);
$test->push(3);
$test->push(4);
$test->push(5);

var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
var_dump($test->pop());
echo "<pre>";
var_dump($test->pop());
echo "</pre>";
