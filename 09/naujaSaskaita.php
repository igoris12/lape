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


        
<?=require __DIR__ . '/view/top.php'?>

<form action="http://localhost/lape/09/naujaSaskaita.php" method="post">
<label >First Name:</label> <input type="text" name="firstName">
<label >Last Name:</label><input type="text" name="lastName">
<label >Person Code:</label><input type="text" name="pesonCode">
<label >Account Number:</label><input type="text" name="acNumber">

<button type="submit">Nauja Saskaita</button>

</form>


</body>
</html>