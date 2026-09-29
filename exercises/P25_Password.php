<?php

class P25_Password
{
    public function main(): void
    {
        echo "Password?";

        $pass = trim(fgets($GLOBALS['STDIN'] ?? STDIN));

        if ($pass == "Caput Draconis") {
            echo "Welcome!";
        } else {
            echo "Off with you!";
        }
    }
}
