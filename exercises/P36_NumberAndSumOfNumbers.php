<?php

class P36_NumberAndSumOfNumbers
{
    public function main(): void
    {
        $value = null;
        $num = 0;
        $sum = 0;

        do {
            echo "Give a number: ";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($value == 0) {
                break;
            }
            $num++;
            $sum += $value;
        } while ($value != 0);

        echo "Number of numbers: " . $num . " ";
        echo "Sum of the numbers: " . $sum;
    }
}
