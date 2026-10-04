<?php

class P39_Counting
{
    public function main(): void
    {
        $num = 0;
        $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        do {
            echo $num . "\n";
            $num++;
        } while ($num <= $value);
    }
}
