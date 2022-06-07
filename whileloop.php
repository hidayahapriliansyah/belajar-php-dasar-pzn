<?php

$nama = "Adi Muhamad Firmansyah";
$banyakKarakter = strlen($nama);

$counter = 0;
while ($counter < $banyakKarakter) :
    echo $nama[$counter] . PHP_EOL;
    $counter++;
endwhile;
