<?php

class P16_SpeedingTicket
{
    public function main(): void
    {
        // Define the speed
        $speed = 121;

        if ($speed > 120) {
            echo "Speeding ticket!\n";
        }
    }
}
