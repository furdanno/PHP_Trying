<?php
function getDistance(array $point1, array $point2)
{
    [$x1, $y1] = $point1;
    [$x2, $y2] = $point2;

    $xs = $x2 - $x1;
    $ys = $y2 - $y1;

    return sqrt($xs ** 2 + $ys ** 2);
}

function getTheNearestLocation(array $LocationList,array $point)
{
    if (empty($LocationList)) {
        return null;
    }
    $min=0;
    foreach ($LocationList as [$name,$Npoint]) {
        if ($point === $Npoint) {
            return [$name, $Npoint];
        } else {
            $ras = getDistance($Npoint, $point);
            if ($ras > $min || $min = 0) {
                $min = $ras;
                $city = $name;
            }
        }
    }
    return [$city,$Npoint];
}
