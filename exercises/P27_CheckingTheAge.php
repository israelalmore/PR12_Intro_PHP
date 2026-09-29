<?php

class P27_CheckingTheAge
{
    public function main(): void
    {
        echo "How old are you?";

        $age = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($age > -1 && $age < 121) {
            echo "Ok";
        } else {
            echo "Impossible!";
        }
    }
}
