<?php

class P23_AbsoluteValue
{
    public function main(): void
    {
        $number = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($number < 0) {
            $n = $number * -1;
            echo $n . "\n";
        } else {
            echo $number . "\n";
        }
    }
}
