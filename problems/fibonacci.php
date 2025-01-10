<?php

function fib($n)
{
    if ($n <= 1) {
        return $n;
    } else {
        return fib($n - 1) + fib($n - 2);
    }
}

$nDigits = 8;

for ($i = 0; $i < $nDigits; $i++) {
    echo fib($i) . "\n";
}