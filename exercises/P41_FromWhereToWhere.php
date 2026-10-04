    <?php

    class P41_FromWhereToWhere
    {
        public function main(): void
        {
            echo "Where to? ";
            $val1 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            echo "Where from? ";
            $val2 = (int) trim(fgets($GLOBALS['STDIN'] ?? STDIN));

            while ($val2 <= $val1) {
                echo "$val2\n";
                $val2++;
            }
        }
    }
