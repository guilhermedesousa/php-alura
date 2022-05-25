<?php

$accounts = [
    12345 => [
        'owner' => 'Guilherme',
        'balance' => 12000
    ],
    67891 => [
        'owner' => 'Pedro',
        'balance' => 1000
    ]
];

$accounts[24680] = [
    'owner' =>  'Bernardo',
    'balance' => 50000
];

foreach ($accounts as $key => $acc) {
    echo $key . ': ' . $acc['owner'] . PHP_EOL;
}
