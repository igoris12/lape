
<?php 

 require __DIR__ . '/top.php';
 require 'C:\xampp\htdocs\lape\BankOOP\app/DataBase.php';
 require 'C:\xampp\htdocs\lape\BankOOP\app/BankControl.php';


$bank = new BankControl;
 
    $route = $_GET['route'] ?? '';

    if ('POST' == $_SERVER['REQUEST_METHOD'] && $route == 'creat' ) {

       $array = [];
        $array = [
        'id' => rand(1000000000, 9999999999),
        'name' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'personCode' => $_POST['pesonCode'],
        'aNumber' => $_POST['acNumber'],
        'balance' => 0,
        ];
      $bank->create($array);

     
    //  echo '<pre>';
    //  print_r($bank->look());
      header('Location: http://localhost/lape/BankOOP/views/creatNewAcount.php');
      die;
    }

?>


<form action="http://localhost/lape/BankOOP/views/creatNewAcount.php?route=creat" method="post">
<input  type="text" name="firstName" placeholder="First name">
<input  type="text" name="lastName" placeholder="Last name">
<input  type="text" name="pesonCode" placeholder="Personal code">
<input  type="text" name="acNumber" value="LT:">
<button type="submit">Nauja Saskaita</button>
</form>

<?php require __DIR__ . '/bottom.php' ?>