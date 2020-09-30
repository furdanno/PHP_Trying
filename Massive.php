<?php

//Begin
function isContinuousSequence(array $mas)
{
    if ($mas === []) {
        return false;
    } else {
        $hz = 0;
        $a = 0;
        foreach ($mas as $index => $numb) {
            $id = $numb - $index;
            $hz = $hz + $id;
            $a = $a + 1;
        }
        if ($hz / $a !== $id || $a === 1) {
            return false;
        } else {
            return true;
        }
    }
}

