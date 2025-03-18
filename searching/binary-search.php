<?php

function binarySearch($target, array $numbers): int
{

    $left = 0;
    $right = count($numbers) - 1;

    while ($left <= $right) {
        $middle = floor(($left + $right) / 2);

        if ($target == $numbers[$middle]) {
            return $middle;
        } elseif ($target < $numbers[$middle]) {
            $right = $middle - 1;
        } else {
            $left = $middle + 1;
        }
    }

    return -1;
}


$numbers = [6, 9, 1, 5, 2, 10, 3, 7, 8, 4];

sort($numbers);
print_r($numbers);
echo "\n " . binarySearch(4, $numbers);