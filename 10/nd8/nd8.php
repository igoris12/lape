<?php
 require __DIR__.'/Piniginė.php';

$piniginė = new Piniginė;

$piniginė->ideti(1);
// $piniginė->ideti(3);
// $piniginė->ideti(11);
// $piniginė->ideti(2);
// $piniginė->ideti(13);

echo $piniginė->skaiciuoti();
echo '<br>';
echo 'Monetu '. $piniginė->monetos();
echo '<br>';
echo 'Banknotu '. $piniginė->banknotai();


echo '<pre>';
echo '<br>';
// var_dump($piniginė);