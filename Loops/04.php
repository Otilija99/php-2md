<?php
//Exercise #4
//Write a console program in a class named FizzBuzz that prompts the user for an integer,
//then prints all of the numbers from one to that integer, separated by spaces.
//Use a loop to print the numbers.
//But for multiples of three, print "Fizz" instead of the number, and for the multiples of five print "Buzz".
//For numbers which are multiples of both three and five print "FizzBuzz".
//Drop to a new line after print each 20 numbers. If the user typed 100, the output would be:...
//Max value? 100


class FizzBuzz
{
    public function run($limit)
    {
        $count = 0;
        for ($i = 1; $i <= $limit; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            }
            elseif ($i % 3 == 0) {
                echo "Fizz ";
            }
            elseif ($i % 5 == 0) {
                echo "Buzz ";
            }
            else {
                echo $i . " ";
            }
            $count++;
            if ($count == 20) {
                echo "\n";
                $count = 0;
            }
        }
    }
}

$fizzBuzz = new FizzBuzz();

$limit = intval(readline("Max value?: "));

$fizzBuzz->run($limit);