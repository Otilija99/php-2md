<?php
//Exercise #4
//Write a program that creates an array of ten integers. It should put ten random numbers from 1 to 100 in the array.
// It should copy all the elements of that array into another array of the same size.
//Then display the contents of both arrays. To get the output to look like this, you'll need a several for loops.
//Create an array of ten integers
$array1 = [];
//Fill the array with ten random numbers (1-100)
for ($i = 0; $i < 10; $i++) {
    $array1[$i] = rand(1, 100);
}
//Copy the array into another array of the same capacity
$array2 = $array1;
//Change the last value in the first array to a -7
$array1[count($array1) - 1] = -7;
//Display the contents of both arrays
echo "Array 1: ";
foreach ($array1 as $value) {
    echo "$value ";
}
echo "\n";

echo "Array 2: ";
foreach ($array2 as $value) {
    echo "$value ";
}
echo "\n";