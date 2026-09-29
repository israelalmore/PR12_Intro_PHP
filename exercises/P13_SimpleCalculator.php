<?php

class P13_SimpleCalculator
{
    public function main(): void
    {
        // Define two numbers
        $numA = 8;
        $numB = 2;

        $sum = $numA + $numB;
        $rest = $numA - $numB;
        $mult = $numA * $numB;
        $div = (float) $numA / $numB;

        echo "8 + 2 = $sum\n";
        echo "8 - 2 = $rest\n";
        echo "8 * 2 = $mult\n";
        echo "8 / 2 = " . number_format($div, 1) . "\n";
    }
}
