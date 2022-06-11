<?php

$grades_1st_quarter = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 7,
    'Guilherme' => 6
];

$grades_2nd_quarter = [
    'Ana' => 10,
    'João' => 8,
    'Maria' => 9,
    'Roberto' => 10
];

var_dump(array_diff_key($grades_1st_quarter, $grades_2nd_quarter));

var_dump(array_diff_assoc($grades_1st_quarter, $grades_2nd_quarter));

$missing_students = array_diff_key($grades_1st_quarter, $grades_2nd_quarter);
$students_name = array_keys($missing_students);
$students_grade = array_values($missing_students);

var_dump(array_keys($missing_students));
var_dump(array_values($missing_students));

var_dump(array_combine($students_grade, $students_name));
var_dump(array_flip($missing_students));
