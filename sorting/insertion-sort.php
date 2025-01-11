<?php

function insertionSort($arr)
{
    for ($i = 1; $i < count($arr); $i++) {

        $temp = $arr[$i];
        $prev = $i - 1;

        while ($prev >= 0 && $arr[$prev] > $temp) {
            $arr[$prev + 1] = $arr[$prev];
            $prev--;
        }

        $arr[$prev + 1] = $temp;
    }

    return $arr;
}

$arr = [9, 2, 7, 3, 9, 10, 23, 100, 3, 1, 0, 72, 5, 1000, 2, 3, 6, 32, 56, 13, 62];
print_r(insertionSort($arr));