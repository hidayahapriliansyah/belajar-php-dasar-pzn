<?php

function tes()
{
    echo 'ini variable function tes';
}

$functionTes = 'tes';
$functionTes();

// ini ngejawab ke bingungan saya kok bisa tiap nulis manual functionnya pake strin kok malah jalan ternyta pake ini toooo ....

function sayHello(string $name, $filter): string
{
    $finalName = $filter($name);
    return "Hello $finalName" . PHP_EOL;
}

echo sayHello("ADI", "strtolower");
echo sayHello("adi", "strtoupper");
