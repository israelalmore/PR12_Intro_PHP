<?php

class P32_OnlyPositives
{
    public function main(): void
    {
        $value = null;

        do {
            echo "Give a number:";
            $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));
            if ($value > 0) {
                $power = $value ** 2;
                echo $power;
            } else if ($value < 0) {
                echo "Unsuitable number\n";
            }
        } while ($value != 0);
    }
}
