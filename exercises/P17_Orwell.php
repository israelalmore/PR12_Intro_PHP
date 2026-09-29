<?php

class P17_Orwell
{
    public function main(): void
    {
        // Prompt the user for input
        echo "Give a number: ";

        // Get input from the user
        $input = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($input == 1984) {
            echo "Orwell";
        }
    }
}
