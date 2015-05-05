<?php
$start = microtime(true);

$sumOfSquares = 0;
$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sumOfSquares += $i * $i;
    $sum += $i;
}
$squareOfSum = $sum * $sum;

$difference = $squareOfSum - $sumOfSquares;
echo "The difference is {$difference}\n";

$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms";

