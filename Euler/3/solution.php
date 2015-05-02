<?php
function isPrime($number) {
    for ($i = 1; $i < $number; $i++) {
        if ($number % $i === 0) {
            return false;
        }
    }
    return true;
}
$number = 600851475143;
$sqrt = sqrt($number);
$largest = 0;
for ($i = 2; $i < $sqrt; $i++) {
    if ($number % $i === 0) {
        $curFound = $i;
        $curFound2 = $number/$i;
        if (isPrime($curFound) && isPrime($curFound2) && $curFound > $largest) {
            $largest = $curFound;
        }
    }
}
print $largest;

    
