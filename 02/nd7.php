<?php

$number1 = rand(-10, 10);
$number2 = rand(-10, 10);
$number3 = rand(-10, 10);

echo "$number1 : $number2 : $number3 <br>";


if ($number1 < 0) echo '<h1 style="color:green;"> "$number1" </h1>';
elseif ($number1 == 0) echo '<h1 style="color:red;"> "$number1 "</h1>';
elseif($number1 > 0) echo '<h1 style="color:blue;"> "$number1" </h1>';

if ($number2 < 0) echo '<h1 style="color:green;"> "$number1" </h1>';
elseif ($number2 == 0) echo '<h1 style="color:red;"> "$number1 "</h1>';
elseif($number2 > 0) echo '<h1 style="color:blue;"> "$number1" </h1>';

if ($number3 < 0) echo '<h1 style="color:green;"> "$number1" </h1>';
elseif ($number3 == 0) echo '<h1 style="color:red;"> "$number1 "</h1>';
elseif($number3 > 0) echo '<h1 style="color:blue;"> "$number1" </h1>';
