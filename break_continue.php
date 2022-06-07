<?php

$counter = 1;
while (true) {
    echo "Ini perulangan ke-$counter" . PHP_EOL;
    $counter++;
    if ($counter == 11) {
        break;
    }
}
