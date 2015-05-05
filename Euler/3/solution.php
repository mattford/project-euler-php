<?php
$number = 600851475143;
$start = microtime(true);
echo "Finding largest prime factor of $number\n";

$i = 2;
$currentNumber = $number;
$largestPrime = 0;
while ($i * $i <= $currentNumber) {
    if (fmod($currentNumber,$i) == 0) {
        $largestPrime = $i;
        $currentNumber = $currentNumber/$i;
    } else {
        $i++;
    }
}
if ($currentNumber > $largestPrime) {
    $largestPrime = $currentNumber;
}
echo "The largest prime factor of $number is $largestPrime\n";
$end = microtime(true);
$duration = $end - $start;
echo "Ran in $duration ms";  
