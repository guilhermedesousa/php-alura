<?php

$class = [
    [
        'name' => 'Guilherme',
        'grade' => 10
    ],
    [
        'name' => 'Pedro',
        'grade' => 8
    ],
    [
        'name' => 'Bernardo',
        'grade' => 9
    ]
];

function sort_grades(array $student_1, array $student_2): int
{
    return $student_2['grade'] <=> $student_1['grade'];
}

usort($class, 'sort_grades');

var_dump($class);
