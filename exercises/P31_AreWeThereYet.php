<?php

class P31_AreWeThereYet
{
    public function main(): void
    {
        $value = null;

        while ($value != 4) {
            echo "Give a number:";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }
    }
}
