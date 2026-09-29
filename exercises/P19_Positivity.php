<?php

class P19_Positivity
{
    public function main(): void
    {
        echo "Give a number: ";

        // Get input from the user
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number > 0) {
            echo "The number is positive.";
        } else {
            echo "The number is not positive.";
        }
    }
}
