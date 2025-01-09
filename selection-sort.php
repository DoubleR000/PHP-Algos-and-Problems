<?php

function selectionSort($arr)
{
    $arrCount = count($arr);
    for ($i = 0; $i < $arrCount - 1; $i++) {
        $min = $i;

        for ($j = $i + 1; $j < $arrCount; $j++) {
            if ($arr[$j] < $arr[$min]) {
                $min = $j;
            }
        }

        $temp = $arr[$i];
        $arr[$i] = $arr[$min];
        $arr[$min] = $temp;
    }

    return $arr;
}

$arr = [9, 2, 7, 3, 9, 10, 23, 100, 3, 1, 0, 72, 5, 1000, 2, 3, 6, 32, 56, 13, 62];
print_r(selectionSort($arr));