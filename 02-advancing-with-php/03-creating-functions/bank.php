<?php

function display_message($message)
{
    echo $message . PHP_EOL;
}

$accounts = [
    12345 => [
        'owner' => 'Guilherme',
        'balance' => 12000
    ],
    67891 => [
        'owner' => 'Pedro',
        'balance' => 1000
    ],
    24680 => [
        'owner' =>  'Bernardo',
        'balance' => 50000
    ]
];

foreach ($accounts as $key => $acc) {
    display_message($key . ': ' . $acc['owner']);
}
