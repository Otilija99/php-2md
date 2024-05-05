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
