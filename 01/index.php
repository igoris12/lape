<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$Jonas = rand(10, 20);
$Petras  = rand(5, 25);

echo "Jonas.$Jonas";
echo '==';
echo "$Petras.Petras";
echo '<br>';

if ($Jonas > $Petras) 
    echo "Laimejo Jonas";
    elseif ($Jonas < $Petras) 
        echo "Laimejo Petras";
   else 
        echo "Laimejo none";
  
$egzaminoRezultatas = rand(1, 10);

echo '<br>';

if ($egzaminoRezultatas > 3) echo'good';
else  echo 'not good';

echo '<br>';





$automobilioGreitis = rand(40, 125);
echo "$automobilioGreitis";
echo '<br>';
if ($automobilioGreitis > 60) {
    $bauda = ($automobilioGreitis - 60) * 5;
    echo "$bauda EUR";
};

echo '<br>';
echo '<br>';

$dalyvis1 = rand(1, 4);

$dalyvis2 = rand(1, 4);

// Išvesti dalyvių pasirinktus skaičius ir pranešimą "Laimėjo", 
//jeigu dalyvių skaičių suma didesnė nei 6 arba tie skaičiai yra vienodi.
// Pranešimą "Pralaimėjo" - priešingu atveju 

if ($dalyvis1 >  $dalyvis2) {
    echo "$dalyvis1";
      echo '$dalyvis1 -Laimėjo';
     echo '<br>';
     echo "$dalyvis2";
     echo '$dalyvis2 -Pralaimėjo';
}elseif ($dalyvis1 <  $dalyvis2) {
    echo "$dalyvis2";
     echo '$dalyvis2 -Laimėjo';
     echo '<br>';
     echo "$dalyvis1";
     echo '$dalyvis1 -Pralaimėjo';
}else {
    echo 'nera -Laimėjo';
}



?>


</body>
</html>