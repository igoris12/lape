<?php
require __DIR__.'/fuction.php';
echo '<pre>';

echo $_SERVER['REQUEST_METHOD'];
echo '<br>';

    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        $array = ['ID' => rand(1,100), 'name' => 'vasokas'];
        setAccount($array);
        header('Location: http://localhost/lape/09/naujaSaskaita.php');
    }


print_r(getAccount()) ;
echo '<br>';
echo '<br>';






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
    
<form action="http://localhost/lape/09/naujaSaskaita.php" method="post">
<input type="text" name="firstName" require>
<input type="text" name="lastName" require>
<input type="text" name="acNumber" require>
<input type="text" name="pesonCode" require>

<button type="submit">Nauja Saskaita</button>

</form>


</body>
</html>