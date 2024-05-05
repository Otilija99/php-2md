<?php
//Exercise 1
//Create a function that accepts any string and returns the same value with added "codelex" by the end of it.
//Print this value out.
function addCodelex($str) {
    return $str . " codelex";
}

$input = readline('Enter a string: ');
$output = addCodelex($input);
print $output;
