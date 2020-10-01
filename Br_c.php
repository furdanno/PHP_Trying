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

$money1 = ['eur 10', 'usd 1', 'usd 10', 'rub 50', 'usd 5', 'rub 10'];
$money2 = ['eur 10', 'usd 1', 'eur 5', 'rub 100', 'eur 20', 'eur 100', 'rub 200'];
$money3 = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];

print_r(getTotalAmount($money3, 'rub'));
