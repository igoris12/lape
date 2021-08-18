<?php

require __DIR__ . "/Tenisininkas.php";

echo '<pre>';

$a = Tenisininkas::getTenisininkas();
$b = Tenisininkas::getTenisininkas();

$a->zaidimoPradzia();



// var_dump($a);
// var_dump($b);

// echo $b->arTuriKamuoliuka();
// echo $b->kamuoliukas;




