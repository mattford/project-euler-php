<?php
$start = microtime(true);
$smallestMultiple = 0;
$current = 1;
while ($smallestMultiple == 0) {
    echo $current."\n";
    for ($i = 1; $i <= 20; $i++) {
        if (fmod($current, $i) != 0) {
            $current++;
            //continue 2;
        }
    }
    $smallestMultiple = $current;
}

echo "The smallest multiple divisible by 1-20 is {$smallestMultiple}\n";

$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";
