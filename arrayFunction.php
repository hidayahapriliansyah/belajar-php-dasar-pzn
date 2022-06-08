<?php

// array map

$data = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

$mapArray = fn ($value) => $value * 10;
var_dump(array_map($mapArray, $data));

// rsort & sort
$alpha = ['a', 'b', 'c', 'd', 'z', 'e'];
rsort($alpha);
var_dump($alpha);
sort($alpha);
var_dump($alpha);
shuffle($alpha);
var_dump($alpha);

// arrray key & value
var_dump(array_keys($alpha));
var_dump(array_values($alpha));
