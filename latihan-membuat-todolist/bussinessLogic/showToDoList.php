<?php

function showToDoList()
{
    global $toDoLists;
    foreach ($toDoLists as $number => $value) {
        echo "$number . $value" . PHP_EOL;
    }
}
