<?php
$start = microtime(true);
$largestPalindrome = 0;
for ($i = 100; $i <= 999; $i++) {
    for ($j = 100; $j <= 999; $j++) {
        $number = $i * $j;
        if ($number == strrev($number) && $number > $largestPalindrome) {
            $largestPalindrome = $number;
        }
    }
}
echo "The largest palindrome produced by two 3-digit numbers is {$largestPalindrome}\n";

$end = microtime(true);
$duration = $end - $start;
echo "Ran in {$duration}ms";

