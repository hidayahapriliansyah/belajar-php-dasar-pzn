<?php

//  break itu untuk menghentikan perulangan seluruhnya(kode yang di bawahnya)
$counter = 1;
while (true) {
    echo "Ini perulangan ke-$counter" . PHP_EOL;
    $counter++;
    if ($counter == 11) {
        break;
    }
}

$nama = "Adi Muhamad Firmansyah";
$banyakKarakter = strlen($nama);

$counter = 0;
while (true) {
    echo $nama[$counter] . PHP_EOL;
    $counter++;
    if ($counter == $banyakKarakter) {
        break;
    }
}

// continue akan melanjutkan periungan dengan menskip kode di bawahnya; menghentikan perulangan saat ini dan melanjutkan perulangan selanjutnya;

for ($counter = 1; $counter <= 10; $counter++) {
    if ($counter % 2 == 0) {
        continue;
    }
    echo "Ini perulangan ke-$counter" . PHP_EOL;
}
