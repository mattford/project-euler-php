<?php
print "Finding the sum of Fibonacci numbers between 0 and 4000000\n";
$start = microtime(true);
$lastTerm = 1;
$currentTerm = 2;
$sum = 0;
while ($currentTerm < 4000000) {
    if ($currentTerm % 2 === 0) {
        $sum += $currentTerm;
    }
    $nextTerm = $lastTerm + $currentTerm;
    $lastTerm = $currentTerm;
    $currentTerm = $nextTerm;
}
$end = microtime(true);
print "The sum is: $sum\n";
$duration = $end - $start;
print "Ran in $duration ms";

