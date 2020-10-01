<?php
function getSuperSeriesWinner(array $goal)
{
    $who=0;
    foreach ($goal as $win) {
        $who += $win[0] <=> $win[1];
    }
    if ($who > 0) {
        return 'canada';
    } elseif ($who < 0) {
        return 'ussr';
    }
    return null;
}
