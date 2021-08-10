


<?php require __DIR__. '/top.php'?>

<?php if (getAccount()!== null) :?>
<?php foreach(getAccount() as $account): ?>
    
        <div>
         <form action="http://localhost/lape/09/sarasas.php?route=list&id=<?= $account['id']?>"
             method="post">
             <button type="submit">delete</button>
         </form>
        <span>ID: <?= $account['id']?></span>
        <span>Acount number: <?= $account['aNumber']?> </span>
        <p>Name: <?= $account['name']?></p>
        <p>Lastname: <?= $account['lastName']?></p>
        <p>Person Code: <?= $account['personCode']?> </p>
        <p>Balance:<?= $account['balance']?> EUR</p>
        </div>


 
<?php endforeach ?>
<?php endif?>

<?php require __DIR__. '/bottom.php'?>