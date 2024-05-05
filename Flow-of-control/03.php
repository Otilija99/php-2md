<?php
//Exercise #3
//Write a program that reads an positive integer and count the number of digits the number has.
echo "Enter a positive integer: ";
$number = intval(readline());
if ($number < 0) {
    echo "Please enter a positive integer.\n";
} else {
    $numDigits = strlen((string)$number);
    echo "The number of digits in $number is: $numDigits\n";
}