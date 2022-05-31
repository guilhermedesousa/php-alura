<?php

$disordered_grades = [10, 8, 9, 7];

$sorted_grades = $disordered_grades;

sort($sorted_grades);

echo 'Desordenadas:';
var_dump($disordered_grades);

echo 'Ordenadas:';
var_dump($sorted_grades);
