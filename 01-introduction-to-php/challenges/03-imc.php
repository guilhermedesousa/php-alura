<?php

$height = 1.80;
$weight = 60;

$imc = $weight / ($height ** 2);

echo "Seu IMC é de $imc. Você está com o IMC: ";

if ($imc >= 40) {
    echo "Obesidade grau 3";
} else if ($imc >= 35) {
    echo "Obesidade grau 2";
} else if ($imc >= 30) {
    echo "Obesidade grau 1";
} else if ($imc >= 25) {
    echo "Sobrepeso";
} else if ($imc >= 18.5) {
    echo "Peso normal";
} else {
    echo "Abaixo do peso";
}
