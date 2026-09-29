<?php

class P22_GradesAndPoints
{
    public function main(): void
    {
        echo "Give points";
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number < 0) {
            echo "impossible!";
        } else if ($number <= 49) {
            echo "failed";
        } else if ($number <= 59) {
            echo "1";
        } else if ($number <= 69) {
            echo "2";
        } else if ($number <= 79) {
            echo "3";
        } else if ($number <= 89) {
            echo "4";
        } else if ($number <= 100) {
            echo "5";
        } else if ($number > 100) {
            echo "incredible!";
        }
    }
}
