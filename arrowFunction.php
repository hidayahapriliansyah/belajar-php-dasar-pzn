<?php
// arrow function itu kayak anonymous function, gak ada namanya, bisa langsung nge return, bisa langsung akses variable di luar function
$angka1 = 10;
$angka2 = 40;

$sum = fn (): int => $angka1 + $angka2;

echo $sum();
