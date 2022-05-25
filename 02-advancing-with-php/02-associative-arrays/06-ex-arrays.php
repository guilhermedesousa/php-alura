<?php

$cars = [
    'ABC-1234' => [
        'brand' => 'VW',
        'model' => 'Golf'
    ],
    'DEF-5678' => [
        'brand' => 'BMW',
        'model' => 'X1'
    ]
];

foreach ($cars as $key => $value) {
    echo $key . " " . $value['brand'] . PHP_EOL;
}
