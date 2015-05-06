<?php
$start = microtime(true);
$longest = 0;
$start = 0;
for ($i = 1; $i < 1000000; $i++) {
    echo "$i\n";
    $n = $i;
    $chain = 0;
    while ($n > 1) {
        if (fmod($n, 2)==0) {
            $n = $n / 2;
        } else {
            $n = ($n * 3) + 1;
        }
        $chain++;
    }
    if ($chain > $longest) {
        $longest = $chain;
        $start = $i;
    }
}
echo "Longest chain: $longest\n";
echo "Starting number: $start\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";

