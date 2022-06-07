<?php

$nama = ['Adi', 'Muhamad', 'Firmansyah'];

//  Bisa pake key (nama variablenya bebas mau indec apa ke) => $value (nama $variable nya bebas)
foreach ($nama as $i => $n) {
    $i++;
    echo "Nama ke-$i " . $n . PHP_EOL;
}

$name = [
    'first_name' => 'Adi',
    'last_name' => 'Firmansyah'
];

foreach ($name as $k => $n) {
    echo "$k adalah $n" . PHP_EOL;
}
