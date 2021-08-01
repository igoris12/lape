<?php

// match

$test = 111;

$result = match ($test) {
    5 => 'five',
    4 => 'four',
    3 => 'three',
    2 => 'two',
    default => 'not in aprty',
};

echo $result;