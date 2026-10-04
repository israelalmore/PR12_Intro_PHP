<?php

class P35_SumOfNumbers
{
    public function main(): void
    {
        $value = 0;
        $num = 0;

        do {
            echo "Give a number: ";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            $num += $value;
        } while ($value !== 0);

        echo "Sum of the numbers: " . $num;
    }
}
