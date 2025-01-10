<?php

function lonelyInteger($a): mixed
{
    $matches = [];
    foreach ($a as $value) {
        if (isset($matches[$value])) {
            unset($matches[$value]);
        } else {
            $matches[$value] = $value;
        }
    }

    return reset($matches);
}


$a = [1, 5, 2, 2, 3, 4, 4, 5, 1, 3, 6];
echo lonelyInteger($a);