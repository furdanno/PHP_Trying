<?php

function getTotalAmount(array $money, $nom)
{
    $sum=0;
    foreach ($money as $znach) {
        $b=substr($znach,0,3);
        if ($b === $nom) {
            $c=(int)substr($znach,4);
            $sum+=$c;
        } else {
            continue;
        }
    }
    return $sum;
}
