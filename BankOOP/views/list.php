<?php require __DIR__ . '/top.php' ?>
  <?php
    
    require 'C:\xampp\htdocs\lape\BankOOP\app/DataBase.php';
    require 'C:\xampp\htdocs\lape\BankOOP\app/BankControl.php';
    require 'C:\xampp\htdocs\lape\BankOOP\app/Router.php';
    $router = new Router;
    $router->roter();
    $bank = new BankControl;
    ?>

    <?php if ($bank->showAll() != null) : ?>
        <?php foreach($bank->showAll() as $account): ?>

    <div class='containerr'>
        <div class='containerBtn'>
            <div class='btnContainer'>
                <form action="?route=delete&id=<?= $account['id']?>" method="post">
                    <button type="submit" class='btn'>delete</button>
                </form>

                <form action="?route=addMoney&id=<?= $account['id']?>" method="post">
                    <button type="submit" class='btn'>Add money</button>
                </form>

                <form action="?route=sub&id=<?= $account['id']?>" method="post">
                    <button type="submit" class='btn'>Subtract money</button>   
                </form>
            </div>   
        </div>
            
        <div class='infoContainer'>
            <!-- <span class='item'><b>ID:</b> <?= $account['id']?></span> -->
            <span class='item'><b>Acount number:</b> <?= $account['aNumber']?> </span>
            <p class='item'><b>Name:</b> <?= $account['name']?></p>
            <p class='item'><b>Lastname:</b> <?= $account['lastName']?></p>
            <p class='item'><b>Person Code:</b> <?= $account['personCode']?> </p>
            <p class='item'><b>Balance:</b> <?= $account['balance']?> EUR</p>
        </div>
    </div>

        <?php endforeach ?>
    <?php endif ?>

<?php require __DIR__ . '/bottom.php' ?>