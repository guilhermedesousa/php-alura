<?php

use PHP_CodeSniffer\Tokenizers\PHP;

$students_2021 = [
    'Ana',
    'João',
    'Maria',
    'Roberto',
    'Guilherme'
];

$new_students = [
    'Patricia',
    'Nico',
    'Douglas',
    'Isabela',
    'Daiane',
    'Igor'
];

$students_2022 = array_merge($students_2021, $new_students);
var_dump($students_2022);
var_dump($students_2021 + $new_students);

// "unpacking" operator
var_dump([...$students_2021, 'Pedro', ...$new_students]);

// "spread" operator
spread_op(...[1, 2, 3]);

function spread_op(int $a, int $b, int $c)
{
    echo $a . PHP_EOL;
    echo $b . PHP_EOL;
    echo $c . PHP_EOL;
}
