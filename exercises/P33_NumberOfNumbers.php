<?php

class P33_NumberOfNumbers
{
    public function main(): void
    {
        $value = null;
        $num = 0;

        do {
            echo "Give a number: ";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($value == 0) {
                break;
            }
            $num += 1;
        } while ($value != 0);

        echo "Number of numbers: " . $num;
    }
}
