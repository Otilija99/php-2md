<?php
//Exercise #10
//Design a Geometry class with the following methods:
//
//A static method that accepts the radius of a circle and returns the area of the circle. Use the following formula:
//Area = π * r * 2
//Use Math.PI for π and r for the radius of the circle
//A static method that accepts the length and width of a rectangle and returns the area of the rectangle.
//Use the following formula:
//Area = Length x Width
//A static method that accepts the length of a triangle’s base and the triangle’s height.
//The method should return the area of the triangle. Use the following formula:
//Area = Base x Height x 0.5
//The methods should display an error message if negative values are used for the circle’s radius,
//the rectangle’s length or width, or the triangle’s base or height.
//
//Next write a program to test the class, which displays the following menu and responds to the user’s selection:
//
//Geometry calculator:
//
//Calculate the Area of a Circle
//Calculate the Area of a Rectangle
//Calculate the Area of a Triangle
//Quit
//Enter your choice (1-4):
//Display an error message if the user enters a number outside the range of 1 through 4
//when selecting an item from the menu.
class Geometry
{
    public static function circleArea($radius)
    {
        if ($radius < 0) {
            echo "Error: Negative radius entered.\n";
        }
        return 3.14 * $radius * $radius;
    }

    public static function rectangleArea($length, $width)
    {
        if ($length < 0 || $width < 0) {
            echo "Error: Negative length or width entered.\n";
        }
        return $length * $width;
    }

    public static function triangleArea($base, $height)
    {
        if ($base < 0 || $height < 0) {
            echo "Error: Negative base or height entered.\n";
        }
        return 0.5 * $base * $height;
    }
}

echo "Geometry calculator:\n";
echo "1. Calculate the Area of a Circle\n";
echo "2. Calculate the Area of a Rectangle\n";
echo "3. Calculate the Area of a Triangle\n";
echo "4. Quit\n";

$choice = intval(readline("Enter your choice (1-4): "));

switch ($choice) {
    case 1:
        $radius = floatval(readline("Enter the radius of the circle: "));
        echo "Area of the circle: " . Geometry::circleArea($radius) . "\n";
        break;
    case 2:
        $length = floatval(readline("Enter the length of the rectangle: "));
        $width = floatval(readline("Enter the width of the rectangle: "));
        echo "Area of the rectangle: " . Geometry::rectangleArea($length, $width) . "\n";
        break;
    case 3:
        $base = floatval(readline("Enter the base of the triangle: "));
        $height = floatval(readline("Enter the height of the triangle: "));
        echo "Area of the triangle: " . Geometry::triangleArea($base, $height) . "\n";
        break;
    case 4:
        echo "Exiting program...\n";
        break;
    default:
        echo "Error: Invalid choice. Please enter a number between 1 and 4.\n";
        break;
}