<?php
//Exercise 6
//Create an non-associative array with 5 elements where 3 are integers, 1 float and 1 string.
//Create a for loop that iterates non-associative array using php in-built function
//that determines count of elements in the array. Create a function that doubles the integer number.
//Within the loop using php in-built function print out the double of the number value (using your custom function).
$array = array(10, 20, 30, 4.5, "hello");
function doubleInteger($num) {
    if (is_int($num)) {
        return $num * 2;
    } else {
        return $num;
    }
};
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo doubleInteger($array[$i]) . "\n";
}