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