<?php
session_start();
require __DIR__.'/fuction.php';
        addNewAccountCintrol();
?>
   
<?=require __DIR__ . '/view/top.php'?>
<div class="container ">
<div class="row  ">
<div class="col-12 form">

<form action="http://localhost/lape/09/naujaSaskaita.php" method="post">
<input class="form-control" type="text" name="firstName" placeholder="First name">
<input class="form-control" type="text" name="lastName" placeholder="Last name">
<input class="form-control" type="text" name="pesonCode" placeholder="Personal code">
<input class="form-control" type="text" name="acNumber" value="<?=acountNumber()?>">
<button type="submit" class="btn btn-primary">Nauja Saskaita</button>
</form>

  </div>
</div>
</div>
</body>
</html>