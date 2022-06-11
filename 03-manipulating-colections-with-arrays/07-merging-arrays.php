<?php

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
