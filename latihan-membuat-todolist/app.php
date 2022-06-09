<?php

require_once 'model/modelToDoLIst.php';
require_once 'bussinessLogic/addToDoList.php';
require_once 'bussinessLogic/removeToDoList.php';
require_once 'bussinessLogic/showToDoList.php';

echo "APLIKASI TO DO LIST" . PHP_EOL;
showToDoList();
