<?php
function calculateDistance($otr1, $otr2)
{
    [$x1,$y1]=$otr1;
    [$x2,$y2]=$otr2;
    $rast=($x2-$x1)**2+($y2-$y1)**2;
    return $rast**0.5;
}

$point1=[0,0];
$point2=[3,4];
print_r(calculateDistance($point1,$point2));