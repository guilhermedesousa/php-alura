<?php

$grades = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Guilherme' => 6
];

// sort an array in reverse order (r) and maintain index association (a)
arsort($grades);
var_dump($grades);

// sort an array by keys
ksort($grades);
var_dump($grades);
