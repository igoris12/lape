<?php require __DIR__ . '/top.php' ?>
  <?php
    
    require 'C:\xampp\htdocs\lape\BankOOP\app/DataBase.php';
    require 'C:\xampp\htdocs\lape\BankOOP\app/BankControl.php';
    require 'C:\xampp\htdocs\lape\BankOOP\app/Router.php';
    $router = new Router;
    $router->roter();
    $bank = new BankControl;
    //  echo '<pre>';
    //  print_r($bank->showAll()); 
    ?>

    <style>
        .container {
            border: 1px solid black;
            margin-top: 10px;
        }

        .containerBtn {
            display: inline-block;
        }

        .infoContainer {
           display: inline-block;
        }
        form {
           display: inline-block;

        }

        button {
           display: inline-block;

        }
        

        span {
           display: inline-block;

        }

        p {
           display: inline-block;

        }



    </style>

    <?php if ($bank->showAll() != null) : ?>
        <?php foreach($bank->showAll() as $account): ?>

    <div class='container'>
    <div class='containerBtn'>
            <div class='btnContainer'>
            <form action="?route=delete&id=<?= $account['id']?>" method="post">
                <button type="submit" class='btn'>delete</button>
            </form>
            <form action="?route=add&id=<?= $account['id']?>" method="post">
                <button type="submit" class='btn'>Add money</button>
            </form>
        <form action="?route=sub&id=<?= $account['id']?>" method="post">
            <button type="submit" class='btn'>Subtract money</button>   
        </form>
    </div>
            
        <div class='infoContainer'>
            <span>ID: <?= $account['id']?></span>
            <span>Acount number: <?= $account['aNumber']?> </span>
            <p>Name: <?= $account['name']?></p>
            <p>Lastname: <?= $account['lastName']?></p>
            <p>Person Code: <?= $account['personCode']?> </p>
            <p>Balance:<?= $account['balance']?> EUR</p>
        </div>
        </div>

        <?php endforeach ?>
    <?php endif ?>

<?php require __DIR__ . '/bottom.php' ?>