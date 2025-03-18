<?php

// The excessive comments are for my own notes in case I forgot how to write this algorithm.

function insertionSort(array $numbers): array
{

    $size = count($numbers);

    for ($i = 1; $i < $size; $i++) {

        // First, get current number since the number will get overwritten during the shifting
        $current = $numbers[$i];

        // Keep track of where we are on the previous numbers
        $prev = $i - 1;

        // Shift all numbers greater than current to the right
        while ($prev >= 0 && $numbers[$prev] > $current) {
            $numbers[$prev + 1] = $numbers[$prev];
            $prev--;
        }

        // Then insert the number at the correct spot.
        // Why add a plus 1? Because $prev will always subtract 1 even after arriving at the correct spot.
        // Examine the while loop carefully to understand what this means.

        $numbers[$prev + 1] = $current;
    }


    return $numbers;
}


$numbers = [9, 8, 1, 3, 20, 7, 2, 5, 9, 4];

print_r(insertionSort($numbers));