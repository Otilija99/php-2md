<?php
//Exercise #8
//Write a console program in a class named NumberSquare that prompts the user for two integers, a min and a max,
//and prints the numbers in the range from min to max inclusive in a square pattern.
//Each line of the square consists of a wrapping sequence of integers increasing from min and max.
//The first line begins with min, the second line begins with min + 1, and so on.
//When the sequence in any line reaches max, it wraps around back to min.
//You may assume that min is less than or equal to max.
class NumberSquare
{
    public function printSquare($min, $max)
    {
        $width = $max - $min + 1;

        for ($i = 0; $i < $width; $i++) {
            for ($j = 0; $j < $width; $j++) {

                $value = $min + (($i + $j) % $width);
                echo $value;
            }

            echo "\n";
        }
    }
}

$numberSquare = new NumberSquare();

$min = intval(readline("Min? "));
$max = intval(readline("Max? "));

$numberSquare->printSquare($min, $max);