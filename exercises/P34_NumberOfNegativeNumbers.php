<?php

class P34_NumberOfNegativeNumbers
{
    public function main(): void
    {
        $value = null;
        $num = 0;

        do {
            echo "Give a number: ";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            if ($value < 0) {
                $num++;
            }
        } while ($value !== 0);

        echo "Number of negative numbers: " . $num;
    }
}
