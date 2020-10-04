<?php
function getIntersectionOfSortedArray(array $mas1,array $mas2)
{
    $res = [];
    foreach ($mas1 as $chi1) {
        foreach ($mas2 as $chi2) {
            if ($chi1 === $chi2) {
                $res[] = $chi1;
            }
        }
    }
    return $res;
}