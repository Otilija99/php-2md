<?php
//Exercise #2
echo "Input number of terms: ";

//todo complete loop to multiply i with itself n times, it is NOT allowed to use built-in pow() function
$terms = intval(readline());

echo "Result: ";

for ($i = 1; $i <= $terms; $i++) {
    $result = $i;
    for ($j = 1; $j < $i; $j++) {
        $result *= $i;
    }
    echo $result . " ";
}