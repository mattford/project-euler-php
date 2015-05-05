<?php
$start = microtime(true);
$smallestMultiple = 0;
$current = 20;
while ($smallestMultiple == 0) {
    for ($i = 1; $i <= 20; $i++) {
        if (fmod($current, $i) != 0) {
            $current = $current +20;
            continue 2;
        }
    }
    $smallestMultiple = $current;
}

echo "The smallest multiple divisible by 1-20 is {$smallestMultiple}\n";

$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";
