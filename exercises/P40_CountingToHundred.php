<?php

class P40_CountingToHundred
{
    public function main(): void
    {
        $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        do {
            echo $value . "\n";
            $value++;
        } while ($value <= 100);
    }
}
