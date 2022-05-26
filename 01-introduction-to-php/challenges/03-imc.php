<?php

$height = 1.80;
$weight = 60;

$imc = $weight / ($height ** 2);

echo "Seu IMC é de $imc. Você está com o IMC: ";

if ($imc >= 40) {
    echo "Obesidade grau 3";
} elseif ($imc >= 35) {
    echo "Obesidade grau 2";
} elseif ($imc >= 30) {
    echo "Obesidade grau 1";
} elseif ($imc >= 25) {
    echo "Sobrepeso";
} elseif ($imc >= 18.5) {
    echo "Peso normal";
} else {
    echo "Abaixo do peso";
}
