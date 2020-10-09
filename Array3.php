<?php
function pick(array $mas, array $keyz)
{
    $result = [];
    foreach ($mas as $key => $value) {
        if (in_array($key, $keyz)) {
            $result[$key] = $value;
        }
    }
    return $result;
}

