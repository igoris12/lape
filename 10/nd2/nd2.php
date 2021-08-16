<?php
 require __DIR__.'/Piniginė.php';

$piniginė = new Piniginė;

$piniginė->ideti(1);
$piniginė->ideti(3);

echo $piniginė->skaiciuoti();


echo '<pre>';
echo '<br>';

var_dump($piniginė);