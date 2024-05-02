//https://github.com/codelex-io/php-syllabus/tree/main/php-basics/loops
<?php
//Exercise #1

echo "The first 10 natural numbers are:";

//todo write a program that displays first 10 natural numbers
for ($i = 1; $i <= 10; $i++) {
    echo $i . " ";
};
echo"
"
?>
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
echo "
"
?>
<?php
//Exercise #3
//Write a program that asks the user to enter two words. The program then prints out both words on one line.
//The words will be separated by enough dots so that the total line length is 30:
//This could be used as part of an index for a book. To print out the dots, use echo "." inside a loop body.

$firstWord = readline( "Enter first word: " );

$secondWord = readline( "Enter second word: " );

$totalLength = 30;
$wordLength = strlen($firstWord) + strlen($secondWord);
$dots = $totalLength - $wordLength;

echo $firstWord;
for ($i = 0; $i < $dots; $i++) {
    echo ".";
}
echo $secondWord;
echo"
"
?>
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
echo"
"
?>
<?php
//Exercise #5
//Write a console program in a class named Piglet that implements a simple 1-player dice game called "Piglet"
//(based on the game "Pig"). The player's goal is to accumulate as many points as possible without rolling a 1.
//Each turn, the player rolls the die; if they roll a 1, the game ends and they get a score of 0.
//Otherwise, they add this number to their running total score. The player then chooses whether to roll again,
//or end the game with their current point total.


class Piglet
{
    public function playGame()
    {
        $totalScore = 0;

        echo "Welcome to Piglet!\n";

        while (true) {
            $roll = rand(1, 6);

            if ($roll == 1) {
                echo "You rolled a 1!\n";
                echo "You got 0 points.\n";
                break;
            } else {
                $totalScore += $roll;
                echo "You rolled a $roll!\n";
                echo "Your score: $totalScore\n";

                echo "Roll again? (yes/no): ";
                $choice = strtolower(readline());
                if ($choice != 'yes') {
                    break;
                }
            }
        }
    }
}

$piglet = new Piglet();

$piglet->playGame();


?>
<?php
//Exercise #6
//Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.
class AsciiFigure {
    const SIZE = 7;
    public function drawFigure() {
        for ($i = 1; $i <= self::SIZE; $i++) {
            for ($j = 1; $j <= 2 * (self::SIZE - $i); $j++) {
                echo "/";
            }
            for ($j = 1; $j <= 4 * $i - 4; $j++) {
                echo "*";
            }
            for ($j = 1; $j <= 2 * (self::SIZE - $i); $j++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}
$asciiFigure = new AsciiFigure();
$asciiFigure->drawFigure();
echo "
";
?>
<?php
//Exercise #7
//Write a console program in a class named RollTwoDice that prompts the user for a desired sum, then repeatedly rolls
//two six-sided dice (using a Random object to generate random numbers from 1-6) until the sum of the two dice values
//is the desired sum.
class RollTwoDice
{
    public function rollUntilDesiredSum($desiredSum)
    {

        while (true) {
            $dice1 = rand(1, 6);
            $dice2 = rand(1, 6);
            $sum = $dice1 + $dice2;

            echo "$dice1 and $dice2 = $sum\n";

            if ($sum == $desiredSum) {
                break;
            }
        }
    }
}

$rollTwoDice = new RollTwoDice();

$desiredSum = intval(readline("Desired sum: "));

$rollTwoDice->rollUntilDesiredSum($desiredSum);
echo "
"
?>
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


?>
