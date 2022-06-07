<?php

function sum(int $first, int $last)
{
    $total = $first + $last;
    echo "$first + $last = $total" . PHP_EOL;
}

sum(12, 12);
sum("100", "34");
sum(true, false);
