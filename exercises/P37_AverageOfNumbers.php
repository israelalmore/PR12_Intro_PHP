<?php

class P37_AverageOfNumbers
{
    public function main(): void
    {
        $sum = 0;
        $value = 0;
        $count = 0;
        $avg = 0;

        do {
            echo "Give a number: ";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($value !== 0) {
                $sum += $value;
                $count++;
            }
        } while ($value !== 0);

        if ($count > 0) {
            $avg = $sum / $count;
        }

        echo "Average of the numbers: " . $avg;
    }
}
