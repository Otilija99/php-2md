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