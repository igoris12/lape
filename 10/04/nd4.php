<?php

require __DIR__ . '/Kibiras3.php';
require __DIR__ . '/KibirasNePo1.php';


$k = new KibirasNePo1();
$k->prideti1Akmeni();
echo '<pre>';

var_dump($k);