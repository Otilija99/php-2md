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