<?php

function display_message(string $message)
{
    echo $message . PHP_EOL;
}

function withdraw_money(array $account, float $value): array
{
    if ($value > $account['balance']) {
        display_message("Você não pode sacar");
    } else {
        $account['balance'] -= $value;
    }

    return $account;
}

function deposit_money(array $account, float $value): array
{
    if ($value > 0) {
        $account['balance'] += $value;
    } else {
        display_message("Depositos precisam ser positivos");
    }

    return $account;
}
