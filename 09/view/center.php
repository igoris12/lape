


<?php require __DIR__. '/top.php'?>

<?php if (getAccount()!== null) :?>
<?php foreach(getAccount() as $account): ?>
    
        <div class='container'>
          <div class='btnContainer'>
          <form action="?route=list&id=<?= $account['id']?>"
             method="post">
             <button type="submit" class='btn'>delete</button>
         </form>
           <form action="?route=add&id=<?= $account['id']?>"
             method="post">
             <button type="submit" class='btn'>Add money</button>
         </form>
           <form action="?route=subtract&id=<?= $account['id']?>"
             method="post">
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
<?php endif?>

<?php require __DIR__. '/bottom.php'?>