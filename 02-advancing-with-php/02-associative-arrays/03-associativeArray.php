<?php

$account1 = [
    'owner' => 'Guilherme',
    'balance' => 12000
];

$account2 = [
    'owner' => 'Pedro',
    'balance' => 1000
];

echo $account1['owner'] . PHP_EOL;

$accounts = [$account1, $account2];

for ($i = 0; $i < count($accounts); $i++) {
    echo $accounts[$i]['owner'] . PHP_EOL;
}
