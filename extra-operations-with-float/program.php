<?php

require_once 'functions.php';

$debits = array();
$credits = array();

// using int values to represent centavos
array_push($debits, 10);
array_push($debits, 10);

array_push($credits, 30);

$balance = balance($debits, $credits);

echo number_format($balance, 2, ',', '.');
