<?php
require __DIR__.'/fuction.php';


    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        $array = [
        'id' => rand(1000000000, 9999999999),
        'name' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'personCode' => $_POST['pesonCode'],
        'aNumber' => $_POST['acNumber'],
        'balance' => 0,
        ];
        setAccount($array);
        header('Location: http://localhost/lape/09/naujaSaskaita.php');
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nauja saskaita</title>
</head>

<style>
      nav {
        background: gray;
        margin: 10px;
        padding: 10px;
    }

    a {
           text-decoration: none;
           color: white; 
           margin: auto 10px;

    }
       a:hover {
           color: blue; 
    }
    form {
          margin: 10px;
        
    }
</style>

<body>
<nav>
    <a href="http://localhost/lape/09/sarasas.php?route=list">List</a>
    <a href="http://localhost/lape/09/naujaSaskaita.php">New account</a>
</nav>    


<form action="http://localhost/lape/09/naujaSaskaita.php" method="post">
<label >First Name:</label> <input type="text" name="firstName">
<label >Last Name:</label><input type="text" name="lastName">
<label >Person Code:</label><input type="text" name="pesonCode">
<label >Account Number:</label><input type="text" name="acNumber">

<button type="submit">Nauja Saskaita</button>

</form>


</body>
</html>