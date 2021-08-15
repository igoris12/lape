<?php
 $test =$_POST['add'] ?? '';
    if (!$test == '') {
  if ("POST" == $_SERVER['REQUEST_METHOD']) {
    addMoney($_POST['add'],$_GET["id"]);
    header("Location: http://localhost/lape/09/sarasas.php?route=add&id=$_GET[id]");
    die;
      }
    }
    $account = getAccount();
?>

<form action="http://localhost/lape/09/sarasas.php?route=add&id=<?=$_GET["id"]?>" method="post" >
    <input type="text" name="add">
    <button type="submit"  class='btn'>Add money</button>
</form>
<?php foreach(getAccount() as $account): ?>
<?php if ($account['id']== $_GET["id"]) :?>
            <div class='infoContainer'>
              <span>ID: <?= $account['id']?></span>
              <span>Acount number: <?= $account['aNumber']?> </span>
              <p>Name: <?= $account['name']?></p>
              <p>Lastname: <?= $account['lastName']?></p>
              <p>Person Code: <?= $account['personCode']?> </p>
              <p>Balance:<?= $account['balance']?> EUR</p>
            </div>
         
<?php endif?>

   
<?php endforeach ?>

