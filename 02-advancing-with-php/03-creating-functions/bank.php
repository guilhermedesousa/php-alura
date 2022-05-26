<?php

// include: for not essentials files
require_once 'functions.php';

$accounts = [
    '123.456.789-10' => [
        'owner' => 'Guilherme',
        'balance' => 12000
    ],
    '123.456.789-11' => [
        'owner' => 'Pedro',
        'balance' => 1000
    ],
    '123.256.789-12' => [
        'owner' =>  'Bernardo',
        'balance' => 50000
    ]
];

$accounts['123.456.789-10'] = withdraw_money($accounts['123.456.789-10'], 500);
$accounts['123.456.789-11'] = withdraw_money($accounts['123.456.789-11'], 2000);
$accounts['123.256.789-12'] = deposit_money($accounts['123.256.789-12'], 5000);

foreach ($accounts as $key => $acc) {
    display_message("$key: {$acc['owner']} {$acc['balance']}");
}
