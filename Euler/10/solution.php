<?php
ini_set('memory_limit', '500M');
$start = microtime(true);
$sum = 0;
//$max = 2000000;
$max = 10000;
$numbers = range(2, $max);

$i = 2;
while($i < $max) {
    echo "Removing multiples of $i\n";
    for ($j = 0; $j < count($numbers)-1; $j++) {
        if (fmod($numbers[$j], $i) == 0) {
            unset($numbers[$j]);
        }
    }
    sort($numbers, SORT_NUMERIC);
    $i = $numbers[0];
}

foreach ($numbers as $number) {
    $sum += $number;
}
echo "The sum is $sum\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";
