<?php
function getSameCount($Massive1,$Massive2)
{
    $i=0;
    $Mas1=array_unique($Massive1);
    $Mas2=array_unique($Massive2);
    foreach ($Mas1 as $number1) {
        if (in_array($number1, $Mas2, true)) {
            $i+=1;
        }
    }
    return $i;
}

print_r(getSameCount([2,2,'one','two'],[3,0]));