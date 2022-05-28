<?php

function balance(array $debits, array $credits): float
{
    return array_sum($credits) - array_sum($debits);
}
