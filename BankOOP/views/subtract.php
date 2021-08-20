<?php $bank = new BankControl;?>

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
        <div>
            <form action="?route=subtract&id=<?= $account['id']?>" method="post">
                <input  type="text" name="money" placeholder="0">
                <button type="submit" >Sub money</button>
            </form>
        </div>
            
    <?php endif ?>
    <?php endforeach ?>

