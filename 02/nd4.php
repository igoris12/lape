<?php

$a = rand(1,10);
$b = rand(1,10);
$c = rand(1,10);
echo "a:$a  b:$b  c:$c <br>";

if ($a + $b > $c &&
    $c + $b > $a && 
    $a + $c > $b) echo 'Triangle can be made.';
 else echo 'With that i cant make triangle.';