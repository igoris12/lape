<?php
session_start();
require __DIR__.'/fuction.php';
$array = [];
    if ('POST' == $_SERVER['REQUEST_METHOD']) {
        if (
        is_numeric($_POST['pesonCode']) &&
        strlen($_POST['pesonCode']) == 11 &&
        nameControl($_POST['firstName'])&&
        nameControl($_POST['lastName']) &&
        nameNumberControl($_POST['firstName']) &&
        nameNumberControl($_POST['lastName']) &&
        personCodeStartControl($_POST['pesonCode'])
        ) {
        accountNumberControl();
        personCodeControl();
        $array = [
        'id' => rand(1000000000, 9999999999),
        'name' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'personCode' => $_POST['pesonCode'],
        'aNumber' => $_POST['acNumber'],
        'balance' => 0,
        ];
        setAccount($array);
        
        addMassage('success', 'New account has ben created');
        }
        if ($array== []) {
            addMassage('danger', 'First name and last name must be longer then 3 symbols, first and last name must not have spaces and numbers, check personal code.');
        }
        header('Location: http://localhost/lape/09/naujaSaskaita.php');
        die;

    }
?>


        
<?=require __DIR__ . '/view/top.php'?>

<form action="http://localhost/lape/09/naujaSaskaita.php" method="post">
<label >First Name:</label> <input type="text" name="firstName">
<label >Last Name:</label><input type="text" name="lastName">
<label >Person Code:</label><input type="text" name="pesonCode">
<label >Account Number:</label><input type="text" name="acNumber" value="<?=acountNumber()?>">

<button type="submit">Nauja Saskaita</button>

</form>


</body>
</html>