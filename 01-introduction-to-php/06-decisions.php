<?php

$age = 17;
$people_number = 2;

echo "Você só pode entrar se tiver a partir de 18 anos ou ";
echo "a partir de 16 anos acompanhado" . PHP_EOL;

if ($age >= 18)
    echo "Você tem $age anos. Pode entrar sozinho.";
elseif ($age >= 16 && $people_number > 1)
    echo "Você tem $age anos, está acompanhado(a), então pode entrar.";
else
    echo "Você só tem $age anos. Você não pode entrar.";

echo PHP_EOL . "Adeus!";
