<?php

function loop(int $value, $urutanLoop = 0)
{
    $urutanLoop += 1;
    if ($value == 1) {
        echo "Loop sudah selesai" . PHP_EOL;
    } else {
        echo "Loop ke-$urutanLoop" . PHP_EOL;
        loop($value - 1, $urutanLoop);
    }
}

loop(3000); //TIDAKKUAT SAJUTA MAGH
