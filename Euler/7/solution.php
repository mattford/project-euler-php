<?php
$start = microtime(true);

$primesFound = 0;
$i = 1;
$lastPrime = 0;
while ($primesFound < 10001) {
    $i++;
    for($j = 2; $j < $i; $j++) {
        if (fmod($i, $j) == 0) {
            continue 2;
        }
    }
    $primesFound++;
    $lastPrime = $i;
}

echo "The prime is {$lastPrime}\n";

$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";