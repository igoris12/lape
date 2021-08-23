
<?php 
 require __DIR__ . '/top.php';


    // if ('POST' == $_SERVER['REQUEST_METHOD'] && $route == 'creat' ) {
    //   if ($bank->addNewAccountCintrol()) {
    //     $array = [];
    //      $array = [
    //     'id' => rand(1000000000, 9999999999),
    //     'name' => $_POST['firstName'],
    //     'lastName' => $_POST['lastName'],
    //     'personCode' => $_POST['pesonCode'],
    //     'aNumber' => $_POST['acNumber'],
    //     'balance' => 0
    //     ];
    //     $bank->create($array);
    //   }else {
    //     $bank->addMassage('danger', 'add message');
    //   }

    //   header('Location: http://localhost/lape/BankOOP/views/creatNewAcount.php');
    //   die;
    // }

?>

<div class='containerr'>
  <div class="creatContainer">
    <form action="<?=DIR?>creat" method="post">
      <div class='inputContent'>
        <label >Nmae: </label><input  type="text" name="firstName" placeholder="First name">
        <label >Last name: </label><input  type="text" name="lastName" placeholder="Last name">
        <label >Personal code: </label><input  type="text" name="pesonCode" placeholder="Personal code">
        <label >Nr: </label><input  type="text" name="acNumber" value="#">
      </div>
      
      <button type="submit">Nauja Saskaita</button>
    </form>
  </div>
  
</div>


<?php require __DIR__ . '/bottom.php' ?>