<?php
//Exercise #6
//Write a console program in a class named AsciiFigure that draws a figure of the following form, using for loops.
class AsciiFigure {
    const SIZE = 7;
    public function drawFigure() {
        for ($i = 1; $i <= self::SIZE; $i++) {
            for ($j = 1; $j <= 2 * (self::SIZE - $i); $j++) {
                echo "/";
            }
            for ($j = 1; $j <= 4 * $i - 4; $j++) {
                echo "*";
            }
            for ($j = 1; $j <= 2 * (self::SIZE - $i); $j++) {
                echo "\\";
            }
            echo "\n";
        }
    }
}
$asciiFigure = new AsciiFigure();
$asciiFigure->drawFigure();