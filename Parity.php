<?php

function getSameParity(array $numb)
{
    if (empty($numb)) {
        return [];
    } else {
        $a=$numb[0] % 2;
        foreach ($numb as $chis) {
            if ($chis % 2 === $a) {
                $res[]=$chis;
            }
            }
        }
        return $res;
}


print_r(getSameParity([1,2,3]));