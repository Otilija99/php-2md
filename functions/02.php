<?php
//Exercise 2
//Create a function that accepts 2 integer arguments.
//First argument is a base value and the second one is a value its been multiplied by.
//For example, given argument 10 and 5 prints out 50

function multiply($base, $multiplier) {
    return $base * $multiplier;
}

$base = readline('Enter a base integer: ');
$multiplier = readline('Enter a multiplier integer: ');

$result = multiply($base, $multiplier);
echo $result;