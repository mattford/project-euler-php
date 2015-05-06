<?php
$start = microtime(true);
$prevTriangle = 0;
$divisors = 0;
$i = 0;
while ($divisors < 500) {
    $i++;
    
    $divisors = 0;
    $n = $prevTriangle + $i;
    $prevTriangle = $n;
    for ($k = 1; $k < sqrt($n); $k++) {
        if (fmod($n, $k) == 0) {
            $divisors+=2;
        }
    }
    $divisors++;
}
echo "$n\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";

