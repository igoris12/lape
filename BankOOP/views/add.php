    
<?php
    // require 'C:\xampp\htdocs\lape\BankOOP\app/DataBase.php';
    // require 'C:\xampp\htdocs\lape\BankOOP\app/BankControl.php';
    // require 'C:\xampp\htdocs\lape\BankOOP\app/Router.php';
    // $aa = new Router;
    // $aa->roter();
    $bank = new BankControl;

    ?>


  <?php foreach ($bank->showAll() as $account) :?>
    <?php if ($account['id'] == $_GET['id']) :?>
        <div class='infoContainer'>
            <span>ID: <?= $account['id']?></span>
            <span>Acount number: <?= $account['aNumber']?> </span>
            <p>Name: <?= $account['name']?></p>
            <p>Lastname: <?= $account['lastName']?></p>
            <p>Person Code: <?= $account['personCode']?> </p>
            <p>Balance:<?= $account['balance']?> EUR</p>
        </div>

            <form action="?route=transfer&id=<?= $account['id']?>" method="post">
                <input  type="text" name="money" placeholder="0">
                <button type="submit" class='btn'>delete</button>
            </form>
    <?php endif ?>

    <?php endforeach ?>
