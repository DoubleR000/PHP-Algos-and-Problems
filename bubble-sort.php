<?php

function bubbleSort($arr)
{
    $arrCount = count($arr);
    for ($i = 0; $i < $arrCount - 1; $i++) {
        for ($j = 0; $j < $arrCount - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    return $arr;
}


$arr = [9, 2, 7, 3, 9, 10, 23, 100, 3, 1, 0, 72, 5, 1000, 2, 3, 6, 32, 56, 13, 62];
print_r(bubbleSort($arr));