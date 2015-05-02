<?php
$start = microtime(true);
print "Finding the sum of all multiples of 3 and 5 below 1000...\n";
$sum = 0;
for ($i = 1; $i < 1000; $i++) {
    if ($i % 5 === 0 || $i % 3 === 0) {
        $sum += $i;
    }
}
$end = microtime(true);
print "The sum is $sum\n";
$duration = $end - $start;
print "Ran in " . $duration . "ms";

