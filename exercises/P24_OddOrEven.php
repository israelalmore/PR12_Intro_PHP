<?php

class P24_OddOrEven
{
    public function main(): void
    {
        echo "Give a number:";

        // Get input from the user
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number % 2 == 0) {
            echo "Number is even.\n";
        } else {
            echo "Number is odd.\n";
        }
    }
}
