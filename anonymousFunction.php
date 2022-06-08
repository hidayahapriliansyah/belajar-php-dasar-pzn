<?php

function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "Good Bye, $finalName";
};

sayGoodBye("adi", function (string $nam): string {
    return strtoupper($nam);
});
