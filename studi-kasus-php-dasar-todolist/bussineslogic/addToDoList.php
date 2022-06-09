<?php

require_once 'model/modelToDoList.php';

function addToDoList($todo)
{
    global $lists;
    $lists[sizeof($lists) + 1] = $todo;
}
