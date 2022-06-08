<?php

function sayHello(string $name, callable $filter)
{
    $finalName = call_user_func($filter, $name);
    echo "Hello $finalName" . PHP_EOL;
};

sayHello("Adi", "strtolower");
sayHello("Adi", "strtoupper");
sayHello("Adi", function (string $name): string {
    return strtolower($name) . " ANONYMOUS FUUNCTION";
});
sayHello("Adi", fn ($name): string => strtoupper($name) . " ARROW FUNCTION");
