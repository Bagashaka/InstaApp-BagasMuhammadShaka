<?php if (in_groups('pengguna')): ?>
    <?= $this->extend('layouts/app'); ?>
    <?= $this->section('content') ?>

    <div class="card">
        <div class="card-header">
            <img  class="img logo rounded-circle " src="<?=$postingan['user_image']?>" alt="" style="width: 50px; height: 50px;">
            <?=$postingan['username']?>
        </div>
        <div class="card-body">
       
        <?php
        $nomor = 1;
        foreach ($komen as $kom){
        ?>
                <div class="form-group row">
            <label for="comment" class="col-sm-2 col-form-label">Comment from <?= $kom['username']?></label>
            <div class="col-sm-10">
            <input type="text" readonly class="form-control-plaintext" name="comment" id="comment" value="<?=$kom['comment']?>">
            </div>
        </div>
        
        <?php 
        }
        ?>  
        <div class="card-footer text">
        <a href="<?=base_url('/comment/create/'.$postingan['postid'])?>">Add Comment</a>
        </div>
        <div class="card-footer text-muted">
        <p class="card-text"><?=$postingan['caption']?></p>
        <p><?=$postingan['created_at']?></p>
        </div>
    </div>
<br>       

    <?= $this->endSection() ?>
<?php endif; ?>
