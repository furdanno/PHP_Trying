<?php
function buildDefinitionList(array $strok)
{
    if (empty($strok)) {
        return '';
    } else{
        $res='';
        foreach ($strok as $word) {
            $res.="<dt>{$word[0]}</dt><dd>{$word[1]}</dd>";
        }
    }
    return "<dl>{$res}</dl>";
}