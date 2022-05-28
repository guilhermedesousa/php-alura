<?php

$array = [
    0 => 'zero',
    1 => 'one',
    2 => 'two'
];

// php uses a complex way to store array in memory (hash table)
// php always uses an associative form for arrays (key and value)
// the keys must be an integer or a string

foreach ($array as $number => $number_name) {
    echo "$number in English is: $number_name" . PHP_EOL;
}

echo "Total: " . count($array) . PHP_EOL;
