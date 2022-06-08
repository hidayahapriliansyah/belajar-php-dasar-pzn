<?php

function sum(...$values)
{
    $total = 0;
    foreach ($values as $value) {
        $total += $value;
    }
    echo "Total " . implode(" + ", $values) . " = $total" . PHP_EOL;
}

sum(...[1, 2, 2]); // untuk input argumen array pada parameter variabel maka sebelum array harus ditambah 3 titik
sum(2, 3, "4"); // untuk input banyak sekaligus bisa dilakukan dengan menambahkan koma seperti memasukkan banyak argumen sekaligus
