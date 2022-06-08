<?php

function sum(int $first, int $second): int // return bertipe integerc
{
    return $first + $second;
}

$total = sum(10, 12);

echo $total;

function getFinalValue(int $value): string //kembalian /return dari fungsi bertipe string
{
    if ($value > 90) {
        return "A";
    } elseif ($value > 70) {
        return "B";
    } elseif ($value > 65) {
        return "C";
    } else {
        return "D";
    }
}

echo getFinalValue(78);
