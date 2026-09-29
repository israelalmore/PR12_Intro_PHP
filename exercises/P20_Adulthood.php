<?php

class P20_Adulthood
{
    public function main(): void
    {
        echo "How old are you? ";

        // Get input from the user
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number > 17) {
            echo "You are an adult.";
        } else {
            echo "You are not an adult.";
        }
    }
}
