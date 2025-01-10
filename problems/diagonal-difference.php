<?php

function diagonalDifference($arr)
{
    $lr = 0;
    $rl = 0;
    $n = count($arr);


    for ($i = 0; $i < $n; $i++) {
        $lr += $arr[$i][$i];
        $rl += $arr[$i][$n - 1 - $i];
    }

    return abs($lr - $rl);
}

$arr = [[1, 2, 3], [4, 5, 6], [9, 8, 9]];

echo diagonalDifference($arr);