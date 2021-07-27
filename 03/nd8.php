<?php

$string = 'Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';

echo $string;

echo '<br>';

preg_match_all('/[1-9]/m', $string, $number);

print_r($number);
echo '<br>';
echo $number[0][0];




