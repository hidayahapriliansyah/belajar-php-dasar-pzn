<?php

$angka = 'ada gajah di balik bacu';
$ganjilgenap = null;

is_int($angka) ?
    ($ganjilgenap = $angka % 2 == 0 ? 'Genap' : 'Ganjil') : ($ganjilgenap = 'Yang Anda masukkan bukan angka');

echo $ganjilgenap;
