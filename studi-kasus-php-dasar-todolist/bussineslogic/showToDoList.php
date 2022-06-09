<?php

require_once 'model/modelToDoList.php';

function showToDoList()
{
    global $lists;
    echo "TO DO LIST" . PHP_EOL;
    foreach ($lists as $number => $value) {
        echo "$number. $value" . PHP_EOL;
    }
};
