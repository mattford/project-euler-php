<?php

// Sieve of Eratosthenes
function eSieve($limit) {
            $sieveBound = ($limit - 1) / 2;
            $upperSqrt = (sqrt($limit) - 1) / 2;

            $primeBits = array_fill(0, $sieveBound, true);

            for ($i = 1; $i <= $upperSqrt; $i++) {
                if ($primeBits[$i]) {
                    for ($j = $i * 2 * ($i + 1); $j <= $sieveBound; $j += 2 * $i + 1) {
                        $primeBits[$j] = false;
                    }
                }
            }

            $numbers = array();
            $numbers[] = 2;
            for ($i = 1; $i <= $sieveBound; $i++) {
                if ($primeBits[$i] === true) {
                    $numbers[] = (2 * $i + 1);
                }
            }

            return $numbers;
}
ini_set('memory_limit', '500M');
$start = microtime(true);
$sum = 0;
$max = 2000000;

$primes = eSieve($max);

for ($i = 0; $i <= count($primes)-1; $i++) {
    $sum += $primes[$i];
}

echo "The sum is $sum\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";
