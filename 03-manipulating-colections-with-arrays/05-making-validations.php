<?php

$grades = [
    'Ana' => '10',
    'João' => 8,
    'Maria' => '9',
    'Roberto' => 10,
    'Guilherme' => null
];

if (is_array($grades)) {
    echo "Yes, it's an array" . PHP_EOL;
}

$numbers = [
    'one',
    'two',
    'three'
];

var_dump(array_is_list($numbers));

// array_key_exists: check if the key exists
var_dump(array_key_exists('Guilherme', $grades));

// isset: check if the key exists and is different than null
var_dump(isset($grades['Guilherme']));

// in_array: check if the value exists
var_dump(in_array(10, $grades));

// uses the === operator
var_dump(in_array(9, $grades, true));

// getting the key of a value
echo array_search(10, $grades, true);
