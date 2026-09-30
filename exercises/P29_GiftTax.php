<?php

class P29_GiftTax
{
    public function main(): void
    {
        echo "Value of the gift?\n";

        $value = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($value < 5000) {
            echo "No tax!";
        } else if ($value < 25000) {
            $tax = 100 + ($value - 5000) * 0.08;
            echo "Tax: $tax";
        } else if ($value < 55000) {
            $tax = 1700 + ($value - 25000) * 0.1;
            echo "Tax: $tax";
        } else if ($value < 200000) {
            $tax = 4700 + ($value - 55000) * 0.12;
            echo "Tax: $tax";
        } else if ($value < 1000000) {
            $tax = 22100 + ($value - 200000) * 0.15;
            echo "Tax: $tax";
        } else {
            $tax = 142100 + ($value - 1000000) * 0.17;
            echo "Tax: $tax";
        }
    }
}
