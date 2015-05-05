<?php
$start = microtime(true);

for ($i = 1; $i <= 1000; $i++) {
    for($j = $i; $j <= 1000; $j++) {
        for ($k = $j; $k <= 1000; $k++) {
            if ($i + $j + $k == 1000 && ($i * $i) + ($j * $j) == ($k * $k)) {
                $product = $i * $j * $k;
                break 3;
                
            }
        }
    }
}
echo "$product\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms\n";


