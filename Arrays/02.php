<?php
//Exercise 2
$numbers = [20, 30, 25, 35, -16, 60, -100];

//todo calculate an average value of the numbers
$sum = array_sum($numbers);
$count = count($numbers);
$average = $sum / $count;
echo "Average value: ". round($average, 2)."\n";