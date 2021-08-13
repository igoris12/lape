<?php
$test =$_POST['subtract'] ?? '';
if (!$test == '') {
    if ("POST" == $_SERVER['REQUEST_METHOD']) {
    subtractMoney($_POST['subtract'],$_GET["id"]);
    header("Location: http://localhost/lape/09/sarasas.php?route=subtract&id=$_GET[id]");
    die;
    }
}
    $account = getAccount();
?>
<style>
    form {
        margin: 10px;
    }
</style>

<form action="http://localhost/lape/09/sarasas.php?route=subtract&id=<?=$_GET["id"]?>" method="post">
    <input type="text" name="subtract">
    <button type="submit">subtract money</button>
</form>


        <?php foreach(getAccount() as $account): ?>
        <?php if ($account['id']== $_GET["id"]) :?>
            <div>
              <span>ID: <?= $account['id']?></span>
              <span>Acount number: <?= $account['aNumber']?> </span>
              <p>Name: <?= $account['name']?></p>
              <p>Lastname: <?= $account['lastName']?></p>
              <p>Person Code: <?= $account['personCode']?> </p>
              <p>Balance:<?= $account['balance']?> EUR</p>
            </div>
         
            <?php endif?>

   
<?php endforeach ?>