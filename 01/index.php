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
echo "    ";

if ($Jonas > $Petras) 
    echo "Laimejo Jonas";
    elseif ($Jonas < $Petras) 
        echo "Laimejo Petras";
   else 
        echo "Laimejo none";
  




?>


</body>
</html>