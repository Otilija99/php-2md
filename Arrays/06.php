<?php
//Exercise #6
//Write a program to play a word-guessing game like Hangman.
//
//It must randomly choose a word from a list of words.
//It must stop when all the letters are guessed.
//It must give them limited tries and stop after they run out.
//It must display letters they have already guessed (either only the incorrect guesses or all guesses).


class Hangman
{
    private $words;
    private $word;
    private $guessedLetters;
    private $maxTries;
    private $triesLeft;

    public function __construct($words, $maxTries)
    {
        $this->words = $words;
        $this->maxTries = $maxTries;
        $this->triesLeft = $maxTries;
        $this->guessedLetters = [];
        $this->selectWord();
    }

    private function selectWord()
    {
        $this->word = $this->words[array_rand($this->words)];
    }

    public function play()
    {
        echo "Welcome to Hangman!\n";
        while ($this->triesLeft > 0 && !$this->isWordGuessed()) {
            $this->displayHangman();
            $this->displayWord();
            $this->displayGuessedLetters();
            $guess = strtoupper(readline("Guess a letter: "));
            if (strlen($guess) != 1 || !ctype_alpha($guess)) {
                echo "Please enter a single letter.\n";
                continue;
            }
            if (in_array($guess, $this->guessedLetters)) {
                echo "You already guessed that letter.\n";
                continue;
            }
            $this->guessedLetters[] = $guess;
            if (strpos($this->word, $guess) !== false) {
                echo "Good guess!\n";
            } else {
                echo "Sorry, the letter is not in the word.\n";
                $this->triesLeft--;
            }
        }
        $this->displayHangman();
        $this->displayWord();
        if ($this->isWordGuessed()) {
            echo "Congratulations! You guessed the word: $this->word\n";
        } else {
            echo "Sorry, you ran out of tries. The word was: $this->word\n";
        }
    }

    private function displayHangman()
    {
        $hangmanImages = [
            "  +---+\n  |   |\n      |\n      |\n      |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n      |\n      |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n  |   |\n      |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n /|   |\n      |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n /|\\  |\n      |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n /|\\  |\n /    |\n      |\n=========",
            "  +---+\n  |   |\n  O   |\n /|\\  |\n / \\  |\n      |\n========="
        ];
        $index = $this->maxTries - $this->triesLeft;
        echo $hangmanImages[$index] . "\n";
    }

    private function displayWord()
    {
        echo "Word: ";
        $display = '';
        foreach (str_split($this->word) as $letter) {
            if (in_array($letter, $this->guessedLetters)) {
                $display .= $letter . ' ';
            } else {
                $display .= '_ ';
            }
        }
        echo trim($display) . "\n";
    }

    private function displayGuessedLetters()
    {
        echo "Guessed letters: " . implode(', ', $this->guessedLetters) . "\n";
    }

    private function isWordGuessed()
    {
        foreach (str_split($this->word) as $letter) {
            if (!in_array($letter, $this->guessedLetters)) {
                return false;
            }
        }
        return true;
    }
}

$words = ["APPLE", "BANANA", "ORANGE", "STRAWBERRY", "GRAPE", "PEACH"];

$maxTries = 6;

$hangman = new Hangman($words, $maxTries);

$hangman->play();