<?php
//Exercise #6
//Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
//The program shall print "Coza" in place of the numbers which are multiples of 3,
//"Loza" for multiples of 5, "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on.
function getWord($number)
{
    $word = "";
    if ($number % 3 == 0) {
        $word .= "Coza";
    }
    if ($number % 5 == 0) {
        $word .= "Loza";
    }
    if ($number % 7 == 0) {
        $word .= "Woza";
    }
    if (empty($word)) {
        $word = $number;
    }
    return $word;
}
for ($i = 1; $i <= 110; $i++) {
    if ($i % 11 == 0) {
        echo "\n";
    }
    echo getWord($i) . " ";
}