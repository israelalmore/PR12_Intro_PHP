<?php

class P21_LargerThanOrEqualTo
{
    public function main(): void
    {
        echo "Give the first number: ";
        $num = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Give the second number: ";
        $num2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($num > $num2) {
            echo "Greater number is: $num";
        }
        if ($num < $num2) {
            echo "Greater number is: $num2";
        } else {
            echo "The numbers are equal!";
        }
    }
}
