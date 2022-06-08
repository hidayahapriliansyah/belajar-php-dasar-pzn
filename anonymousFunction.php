<?php

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye, $finalName";
};

sayGoodBye("adi", function (string $nam): string {
    return strtoupper($nam);
});

// variable di luar clouse/ anonymous function tidak bisa diakses, untuk mengaksesnya gunakan use

$firstName = "Adi";
$lastName = "Firmansyah";

$sayHello = function () use ($firstName, $lastName) {
    echo "Hello, $firstName $lastName";
};

$sayHello();
