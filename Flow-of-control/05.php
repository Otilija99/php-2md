<?php
//Exercise #5
//On your phone keypad, the alphabets are mapped to digits as follows: ABC(2), DEF(3), GHI(4), JKL(5), MNO(6),
//PQRS(7), TUV(8), WXYZ(9).
//
//Write a program called PhoneKeyPad, which prompts user for a String (case insensitive),
//and converts to a sequence of keypad digits.
//
//Use:
//
//a "nested-if" statement
echo "Enter a string: ";
$input = strtoupper(readline());

echo "Using nested if:\n";
foreach (str_split($input) as $char) {
    if ($char >= 'A' && $char <= 'C') {
        echo "2";
    } elseif ($char >= 'D' && $char <= 'F') {
        echo "3";
    } elseif ($char >= 'G' && $char <= 'I') {
        echo "4";
    } elseif ($char >= 'J' && $char <= 'L') {
        echo "5";
    } elseif ($char >= 'M' && $char <= 'O') {
        echo "6";
    } elseif ($char >= 'P' && $char <= 'S') {
        echo "7";
    } elseif ($char >= 'T' && $char <= 'V') {
        echo "8";
    } elseif ($char >= 'W' && $char <= 'Z') {
        echo "9";
    } else {
        echo $char;
    }
}
echo "\n";
//a "switch-case-default" statement

echo "Enter a string: ";
$input = strtoupper(readline());

echo "Using switch-case-default:\n";
foreach (str_split($input) as $char) {
    switch ($char) {
        case 'A':
        case 'B':
        case 'C':
            echo "2";
            break;
        case 'D':
        case 'E':
        case 'F':
            echo "3";
            break;
        case 'G':
        case 'H':
        case 'I':
            echo "4";
            break;
        case 'J':
        case 'K':
        case 'L':
            echo "5";
            break;
        case 'M':
        case 'N':
        case 'O':
            echo "6";
            break;
        case 'P':
        case 'Q':
        case 'R':
        case 'S':
            echo "7";
            break;
        case 'T':
        case 'U':
        case 'V':
            echo "8";
            break;
        case 'W':
        case 'X':
        case 'Y':
        case 'Z':
            echo "9";
            break;
        default:
            echo $char;
            break;
    }
}
echo "\n";
//Hint: In switch-case, you can handle multiple cases by omitting the break statement, e.g.,