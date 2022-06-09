<?php

require_once 'model/modelToDoList.php';

function removeToDoList($number)
{
    global $lists;
    for ($i = $number; $i < sizeof($lists); $i++) {
        $lists[$i] = $lists[$i + 1];
    }
    unset($lists[sizeof($lists)]);
};
