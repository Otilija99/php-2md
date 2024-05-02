//https://github.com/codelex-io/php-syllabus/tree/main/php-basics/flow-of-control
<?php
//Exercise #1

echo "Input the 1st number: ";
$number1 = intval(readline());
echo "Input the 2nd number: ";
$number2 = intval(readline());
echo "Input the 3rd number: ";
$number3 = intval(readline());
//todo print the largest number
$largest = $number1;
if ($number2 > $largest) {
    $largest = $number2;
}
if ($number3 > $largest) {
    $largest = $number3;
}
echo "The largest number is: $largest\n";
?>
<?php
//Exercise #2
echo "Enter the number.";
$number = intval(readline());
//todo print if number is positive or negative
if ($number > 0) {
    echo "The number is positive.\n";
} elseif ($number < 0) {
    echo "The number is negative.\n";
} else {
    echo "The number is zero.\n";
}
?>
<?php
//Exercise #3
//Write a program that reads an positive integer and count the number of digits the number has.
echo "Enter a positive integer: ";
$number = intval(readline());
if ($number < 0) {
    echo "Please enter a positive integer.\n";
} else {
    $numDigits = strlen((string)$number);
    echo "The number of digits in $number is: $numDigits\n";
}
?>
<?php
//Exercise #4
//Write a program which prints “Sunday”, “Monday”, ... “Saturday” if the int variable "dayNumber" is 0, 1, ..., 6,
//respectively. Otherwise, it shall print "Not a valid day".
//
//Use:
//
//a "nested-if" statement
$dayNumber = intval(readline("Enter the day number (1-7): "));

if ($dayNumber >= 1 && $dayNumber <= 7) {
    } if ($dayNumber == 1) {
        echo "Monday\n";
    } elseif ($dayNumber == 2) {
        echo "Tuesday\n";
    } elseif ($dayNumber == 3) {
        echo "Wednesday\n";
    } elseif ($dayNumber == 4) {
        echo "Thursday\n";
    } elseif ($dayNumber == 5) {
        echo "Friday\n";
    } elseif ($dayNumber == 6) {
        echo "Saturday\n";
    } elseif ($dayNumber == 7) {
    echo "Sunday\n";
} else {
    echo "Not a valid day\n";
}
//a "switch-case-default" statement.
$dayNumber2 = intval(readline("Enter the day number (1-7): "));

switch ($dayNumber2) {
    case 1:
        echo "Monday\n";
        break;
    case 2:
        echo "Tuesday\n";
        break;
    case 3:
        echo "Wednesday\n";
        break;
    case 4:
        echo "Thursday\n";
        break;
    case 5:
        echo "Friday\n";
        break;
    case 6:
        echo "Saturday\n";
        break;
    case 7:
        echo "Sunday\n";
        break;
    default:
        echo "Not a valid day\n";
        break;
}
?>
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
?>