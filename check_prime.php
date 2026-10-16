<?php
function checkPrime($num)
{
    if ($num <= 1) {
        return false;
    }

    for ($i = 2; $i <= sqrt($num); $i++) {
        if ($num % $i == 0) {
            return false;
        }
    }

    return true;
}

$n = 7;

if (isPrime($n)) {
    echo "$n is a prime number";
} else {
    echo "$n is not a prime number";
}
?>