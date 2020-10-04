<?php
function checkIfBalanced($string) {
    // Инициализируем стек
    $stack=[];
    //Список открывающих элементов
    $startSym=['('];
    //Список пар
    $pairs=['()'];
    //Закрывающий элемент
    $endSym=[')'];

    //Проход по строке от первого до последнего символа
    for ($i=0; $i < strlen($string); $i++) {
        $nast = $string[$i];
        if (in_array($nast, $startSym)) {
            array_push($stack, $nast);
        } elseif (in_array($nast, $endSym)) {
            $prev = array_pop($stack);
            $pair="{$prev}{$nast}";
            if (!in_array($pair,$pairs)) {
                return false;
            }
        }
    }
    return count($stack) === 0;
}

var_dump(checkIfBalanced('(5 + 6) * (7 + 8)/(4 + 3)'));