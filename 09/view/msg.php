<?php if(!empty($message)): ?>
<!-- <div class="container">
    <div class="row">
        <div class="col-12"> -->
            <?php foreach($message as $info): ?>
                <div class="alert alert-<?=$info['type']?>" role="alert">
                    <?= $info['msg'] ?>
                </div>
            <?php endforeach ?>
        <!-- </div>
    </div>
</div>     -->
<?php endif ?>