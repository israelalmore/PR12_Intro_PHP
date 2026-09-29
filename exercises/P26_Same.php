<?php

class P26_Same
{
    public function main(): void
    {
        echo "Enter the first string: ";
        $first = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        echo "Enter the second string: ";
        $second = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($first == $second) {
            echo "Same";
        } else {
            echo "Different";
        }
    }
}
