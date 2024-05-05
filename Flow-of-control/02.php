<?php
//Exercise #2
echo "Enter the number.";
$number = intval(readline());
//todo print if number is positive or negative
if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}