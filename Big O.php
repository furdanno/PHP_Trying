<?php
function getIntersectionOfSortedArray(array $mas1,array $mas2)
{
    if ($mas1 === [] || $mas2 === []) {
        $res = [];
    }
    else {
        $res = [];
        foreach ($mas1 as $chi1) {
            foreach ($mas2 as $chi2) {
                if ($chi1 === $chi2) {
                    $res[] = $chi1;
                }
            }
        }
    }
    return $res;
}

print_r(getIntersectionOfSortedArray([11,24,-2],[3,5,10,-2]));