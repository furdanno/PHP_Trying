<?php
function flatten($massive)
{
    if (empty($massive)) {
        return [];
    }
    foreach ($massive as $znach) {
        if (gettype($znach) === "array") {
            foreach ($znach as $itog) {
                if (gettype($itog) === "array") {
                $res[]=[...$itog];} else {
                    $res[]=$itog;
                }
            }
        } else {
            $res[]=$znach;
        }
    }
    return $res;
}

$a=[1,[[3],[2]], 9];

print_r(flatten($a));