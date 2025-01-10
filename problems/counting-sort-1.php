<?php

// Most of the comments is me, misunderstanding the problem. 
// I first made it so that it will only count the frequency up to the max number inside $arr but it seems that arr[i] is just 0 <= arr[i] < 100
// Me not reading constraints carefully lmao.
// I left the comments for self reflection. Sorry for the mess.

function countingSort($arr)
{
    $frequency = [];

    $arrCount = count($arr);
    // $freqCount = count($frequency);

    for ($i = 0; $i < 100; $i++) {
        $frequency[$i] = 0;
    }

    for ($i = 0; $i < $arrCount; $i++) {
        // if (!isset($frequency[$arr[$i]]) && $freqCount - 1 < $arr[$i]) {
        //     for ($j = 0; $j < $arr[$i] + 1 - $freqCount; $j++) {
        //         $frequency[] = 0;
        //     }
        //     $frequency[$arr[$i]] = 1;
        //     $freqCount = count($frequency);
        //     continue;
        // }

        $frequency[$arr[$i]]++;
    }
    // for ($i = 0; $i < $arrCount; $i++) {
    //     $frequency[$arr[$i]]++;
    // }

    return $frequency;

    // $sortedArr = [];
    // $sortedCount = count($frequency);

    // $freqIndex = 0;
    // for ($i = 0; $i < $sortedCount; $i++) {
    //     if ($frequency[$freqIndex] <= 0) {
    //         $freqIndex++;
    //     }

    //     $sortedArr[$i] = $freqIndex;
    //     $frequency[$freqIndex]--;
    // }

    // return $sortedArr;
}


$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 0, 0, 2, 5];
// for ($i = 0; $i < 5; $i++) {
//     $arr[] = random_int(0, 100);
// }

print_r(countingSort($arr));