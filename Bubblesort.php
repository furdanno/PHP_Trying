<?php
function bubbleSort($massive)
{
    $len = count($massive)-1;
    for ($i = $len; $i>=0; $i--) {
        for ($j = 0; $j<=($i-1); $j++)
            if ($massive[$j]>$massive[$j+1]) {
                $k = $massive[$j];
                $massive[$j]=$massive[$j+1];
                $massive[$j+1] = $k;
            }
    }
    return $massive;
}
print_r(bubbleSort([3,10,4,3]));