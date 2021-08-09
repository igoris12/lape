<?php

require __DIR__.'/fuction.php';
if ('POST' == $_SERVER['REQUEST_METHOD']) {
  $arraayy = [rand(1,1000) =>['firsName'=> '', 'lastName'=> '','accountNumber'=> 0,'personKode'=> 0]];
    setAccount($arraayy);
   
    header('Location: http://localhost/lape/09/naujaSaskaita.php');
}

 print_r(getAccount());


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja saskaita</title>
</head>
<body>
    
<form action="" method="post">
<input type="text" name="vardas">
<input type="text" name="pavarde">
<input type="text" name="sNumeris">
<input type="text" name="aKodas">

<button type="submit">Nauja Saskaita</button>

</form>


</body>
</html>