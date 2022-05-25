<?php

$age_list = [20, 21, 22, 23, 24, 25, 26];

for ($i = 0; $i < count($age_list); $i++) {
    echo $age_list[$i] . PHP_EOL;
}

$people = array('João', 'Maria', 'Pedro', 'Ana');

$qtt_people = count($people);

for ($j = 0; $j < $qtt_people; $j++) {
    echo $people[$j] . PHP_EOL;
}
