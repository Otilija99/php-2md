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