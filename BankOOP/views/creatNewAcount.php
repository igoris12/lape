
<?php 

 require __DIR__ . '/top.php';
 require 'C:\xampp\htdocs\lape\BankOOP\app/DataBase.php';
 require 'C:\xampp\htdocs\lape\BankOOP\app/BankControl.php';


$bank = new BankControl;
 
    $route = $_GET['route'] ?? '';

    if ('POST' == $_SERVER['REQUEST_METHOD'] && $route == 'creat' ) {
// addNewAccountCintrol()
      if ($bank->addNewAccountCintrol()) {
        $array = [];
         $array = [
        'id' => rand(1000000000, 9999999999),
        'name' => $_POST['firstName'],
        'lastName' => $_POST['lastName'],
        'personCode' => $_POST['pesonCode'],
        'aNumber' => $_POST['acNumber'],
        'balance' => 0
        ];
        $bank->create($array);
      }
       
      header('Location: http://localhost/lape/BankOOP/views/creatNewAcount.php');
      die;
    }

?>

<div class='containerr'>
  <div class="creatContainer">
    <form action="http://localhost/lape/BankOOP/views/creatNewAcount.php?route=creat" method="post">
      <div class='inputContent'>
        <label >Nmae: </label><input  type="text" name="firstName" placeholder="First name">
        <label >Last name: </label><input  type="text" name="lastName" placeholder="Last name">
        <label >Personal code: </label><input  type="text" name="pesonCode" placeholder="Personal code">
        <label >Nr: </label><input  type="text" name="acNumber" value="<?= $bank->acountNumber()?>">
      </div>
      
      <button type="submit">Nauja Saskaita</button>
    </form>
  </div>
  
</div>


<?php require __DIR__ . '/bottom.php' ?>