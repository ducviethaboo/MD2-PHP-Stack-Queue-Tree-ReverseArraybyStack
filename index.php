<?php
include_once 'Stack.php';

$arr = [];

$stack = new Stack();
$stack->insert(1);
$stack->insert(2);
$stack->insert(3);
//$stack->insert(4);
echo "<pre>";
//var_dump($stack->getAndpush($arr));
$stack->insert(4);
var_dump($stack->getAndpush($arr));