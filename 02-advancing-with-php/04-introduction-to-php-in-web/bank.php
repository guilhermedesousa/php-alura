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
$accounts['123.256.789-12'] = deposit_money($accounts['123.256.789-12'], 5000);

unset($accounts['123.456.789-11']);

owner_name_to_uppercase($accounts['123.456.789-10']);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach ($accounts as $cpf => $acc) : ?>
            <dt>
                <h4><?= $acc['owner']; ?> - <?= $cpf; ?></h4>
            </dt>
            <dd>
                Saldo: <?= $acc['balance']; ?>
            </dd>
        <?php endforeach; ?>
    </dl>
</body>
</html>