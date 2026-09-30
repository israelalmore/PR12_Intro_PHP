<?php

class P30_CarryOn
{
    public function main(): void
    {
        $value = null;

        while ($value != "no") {
            echo "Shall we carry on?";
            $value = trim(fgets($GLOBALS['STDIN'] ?? STDIN));
        }
    }
}
