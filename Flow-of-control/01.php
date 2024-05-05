<?php
//Exercise #1

echo "Input the 1st number: ";
$number1 = intval(readline());
echo "Input the 2nd number: ";
$number2 = intval(readline());
echo "Input the 3rd number: ";
$number3 = intval(readline());
//todo print the largest number
$largest = $number1;
if ($number2 > $largest) {
    $largest = $number2;
}
if ($number3 > $largest) {
    $largest = $number3;
}
echo "The largest number is: $largest\n";