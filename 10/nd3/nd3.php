<?php

require __DIR__.'/Kibiras1.php';

 $Kibiras1 = new Kibiras1;
 $Kibiras2 = new Kibiras1;
 $Kibiras3 = new Kibiras1;
echo '<pre>'; 

 $Kibiras1->prideti1Akmeni();
 $Kibiras1->pridetiDaugAkmenu(10);

  $Kibiras2->prideti1Akmeni();
 $Kibiras2->pridetiDaugAkmenu(5);

  $Kibiras3->prideti1Akmeni();
 $Kibiras3->pridetiDaugAkmenu(5);

 echo $Kibiras1->kiekPririnktaAkmenu();
echo '<br>';
echo $Kibiras1->geterį();
echo '<br>';


var_dump($Kibiras1);
var_dump($Kibiras2);
var_dump($Kibiras3);

