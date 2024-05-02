https://github.com/codelex-io/php-syllabus/tree/main/php-basics/arrays
<?php
//Exercise 1

$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2165, 1457, 2456
];

//todo
echo "Original numeric array: ";
print_r($numbers);
//todo
sort($numbers);
echo "Sorted numeric array: ";
print_r($numbers);
$words = [
    "Java",
    "Python",
    "PHP",
    "C#",
    "C Programming",
    "C++"
];

//todo
echo "Original string array: ";
print_r($words);
//todo
sort($words);
echo "Sorted string array: ";
print_r($words);
?>
<?php
//Exercise 2
$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "Average value: ". round($average, 2)."\n";
?>
<?php
//Exercise 3
$numbers = [
    1789, 2035, 1899, 1456, 2013,
    1458, 2458, 1254, 1472, 2365,
    1456, 2265, 1457, 2456
];

echo "Enter the value to search for: ";

//todo check if an array contains a value user entered
$value = intval(readline());
if (in_array($value, $numbers)) {
    echo "The value $value is found in the array.\n";
} else {
    echo "The value $value is not found in the array.\n";
}
?>
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
?>
<?php
//Exercise 5
//Code an interactive, two-player game of Tic-Tac-Toe. You'll use a two-dimensional array of chars.
class TicTacToe
{
    private $board;

    public function __construct()
    {
        // Initialize the game board with empty spaces
        $this->board = [
            [' ', ' ', ' '],
            [' ', ' ', ' '],
            [' ', ' ', ' '],
        ];
    }

    public function displayBoard()
    {
        // Display the game board
        echo "  0 1 2\n";
        for ($i = 0; $i < 3; $i++) {
            echo "$i ";
            for ($j = 0; $j < 3; $j++) {
                echo $this->board[$i][$j] . " ";
            }
            echo "\n";
        }
    }

    public function makeMove($row, $col, $player)
    {
        if ($row >= 0 && $row < 3 && $col >= 0 && $col < 3 && $this->board[$row][$col] == ' ') {
            $this->board[$row][$col] = $player;
            return true;
        }
        return false;
    }

    public function checkWinner()
    {for ($i = 0; $i < 3; $i++) {
            if ($this->board[$i][0] != ' ' && $this->board[$i][0] == $this->board[$i][1] && $this->board[$i][1] == $this->board[$i][2]) {
                return $this->board[$i][0];
            }
            if ($this->board[0][$i] != ' ' && $this->board[0][$i] == $this->board[1][$i] && $this->board[1][$i] == $this->board[2][$i]) {
                return $this->board[0][$i];
            }
        }
        if ($this->board[0][0] != ' ' && $this->board[0][0] == $this->board[1][1] && $this->board[1][1] == $this->board[2][2]) {
            return $this->board[0][0];
        }
        if ($this->board[0][2] != ' ' && $this->board[0][2] == $this->board[1][1] && $this->board[1][1] == $this->board[2][0]) {
            return $this->board[0][2];
        }
        return null;
    }
    public function getBoard() {
        return $this->board;
    }
}

$game = new TicTacToe();
$currentPlayer = 'X';

while (true) {
    $game->displayBoard();

    echo "Player $currentPlayer's turn. Enter row and column (e.g., 0 1): ";
    list($row, $col) = explode(' ', readline());
    $row = intval($row);
    $col = intval($col);

    if ($game->makeMove($row, $col, $currentPlayer)) {
        $winner = $game->checkWinner();
        if ($winner !== null) {
            $game->displayBoard();
            echo "Player $winner wins!\n";
            break;
        }

        $tie = true;
        foreach ($game->getBoard() as $row) {
            foreach ($row as $cell) {
                if ($cell == ' ') {
                    $tie = false;
                    break 2;
                }
            }
        }
        if ($tie) {
            $game->displayBoard();
            echo "It's a tie!\n";
            break;
        }

        $currentPlayer = ($currentPlayer == 'X') ? 'O' : 'X';
    } else {
        echo "Invalid move. Try again.\n";
    }
}


?>
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
?>