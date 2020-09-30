<?php

//Begin
function calculateAverage(array $temper)
{
    if (empty($temper)) {
        return null;
    } else {
        $sum=0;
        $id=0;
        foreach ($temper as $index => $temp) {
            $id=$id+1;
            $sum=$sum+$temp;
        }
    }
    return (round($sum/$id,1));
}

$tt=[37.5, 34, 39.3, 40, 38.7, 41.5];

print_r(calculateAverage($tt));


