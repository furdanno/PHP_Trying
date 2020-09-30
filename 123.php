<?php
function isPowerOfThree($a)
{
    if ($a % 3 === 0 || $a === 1) {
        return true;
    }
    else {
        return false;
    }
}
var_dump(isPowerOfThree(1));
?>