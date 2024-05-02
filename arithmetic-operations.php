//https://github.com/codelex-io/php-syllabus/tree/main/php-basics/arithmetic-operations
<?php
//Exercise #6
//Write a program called coza-loza-woza.php which prints the numbers 1 to 110, 11 numbers per line.
//The program shall print "Coza" in place of the numbers which are multiples of 3,
//"Loza" for multiples of 5, "Woza" for multiples of 7, "CozaLoza" for multiples of 3 and 5, and so on.
function getWord($number)
{
    $word = "";
    if ($number % 3 == 0) {
        $word .= "Coza";
    }
    if ($number % 5 == 0) {
        $word .= "Loza";
    }
    if ($number % 7 == 0) {
        $word .= "Woza";
    }
    if (empty($word)) {
        $word = $number;
    }
    return $word;
}
for ($i = 1; $i <= 110; $i++) {
    if ($i % 11 == 0) {
        echo "\n";
    }
    echo getWord($i) . " ";
}
echo"
"
?>
<?php
//Exercise #7
//Modify the example program to compute the position of an object after falling for 10 seconds,
// outputting the position in meters. The formula in Math notation is:
$gravity = 9.81;
$time = 10;
function computePosition($time, $gravity) {
    return 0.5 * $gravity * $time * $time;
}
$position = computePosition($time, $gravity);
echo "The position of the object after falling for 10 seconds is: " . $position . " meters.";
echo"
"
?>
<?php
//Exercise #8
//Foo Corporation needs a program to calculate how much to pay their hourly employees.
//The US Department of Labor requires that employees get paid time and a half for any hours over 40
//that they work in a single week. For example, if an employee works 45 hours, they get 5 hours of overtime,
//at 1.5 times their base pay. The State of Massachusetts requires that hourly employees be paid at least $8.00 an hour.
//Foo Corp requires that an employee not work more than 60 hours in a week.

function calculateTotalPay($basePay, $hoursWorked)
{

    $minWage = 8.00;
    $overtimeRate = 1.5;
    if ($basePay < $minWage) {
        return "Error: Base pay cannot be less than minimum wage.";
    }

    if ($hoursWorked > 60) {
        return "Error: Hours worked cannot exceed 60.";
    }
    if ($hoursWorked <= 40) {
        $totalPay = $hoursWorked * $basePay;
    } else {
        $regularPay = 40 * $basePay;
        $overtimePay = ($hoursWorked - 40) * $basePay * $overtimeRate;
        $totalPay = $regularPay + $overtimePay;
    }
    return $totalPay;
}
function main()
{
    $employees = array(
        array("name" => "Employee 1", "basePay" => 7.50, "hoursWorked" => 35),
        array("name" => "Employee 2", "basePay" => 8.20, "hoursWorked" => 47),
        array("name" => "Employee 3", "basePay" => 10.00, "hoursWorked" => 723)
    );
    foreach ($employees as $employee) {
        echo $employee['name'] . " total pay: ";
        $totalPay = calculateTotalPay($employee['basePay'], $employee['hoursWorked']);
        if (is_numeric($totalPay)) {
            echo "$" . number_format($totalPay, 2) . "\n";
        } else {
            echo $totalPay . "\n";
        }
    }
}
main();
echo "
"
?>
<?php
//Exercise #9
//Write a program that calculates and displays a person's body mass index (BMI).
// A person's BMI is calculated with the following formula: BMI = weight x 703 / height ^ 2.
// Where weight is measured in pounds and height is measured in inches.
// Display a message indicating whether the person has optimal weight, is underweight, or is overweight.
// A sedentary person's weight is considered optimal if his or her BMI is between 18.5 and 25.
// If the BMI is less than 18.5, the person is considered underweight.
// If the BMI value is greater than 25, the person is considered overweight.
//
//Your program must accept metric units.


function calculateBMI($weight, $height)
{
    return $weight/ ($height * $height); //ieliku pareizo funkciju, kas ir kg/m^2
}

function determineWeightStatus($bmi)
{
    if ($bmi < 18.5) {
        return "underweight";
    } elseif ($bmi >= 18.5 && $bmi <= 25) {
        return "optimal weight";
    } else {
        return "overweight";
    }
}

function main2()
{
    $weight = readline("Enter weight in kilograms: ");
    $height = readline("Enter height in meters: ");

    $bmi = calculateBMI($weight, $height);

    $weightStatus = determineWeightStatus($bmi);

    echo "BMI: " . round($bmi, 2) . "\n";
    echo "Weight status: " . $weightStatus . "\n";
}
main2();
echo"
"
?>
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
?>