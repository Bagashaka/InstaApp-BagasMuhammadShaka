<?php if (in_groups('pengguna')):?> 
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>

<?php
$nomor = 1;
foreach ($postingan as $pos){
?>

<div class="card">
    <div class="card-header">
      <img  class="img logo rounded-circle " src="<?=$pos['user_image']?>" alt="" style="width: 50px; height: 50px;">
      <?=$pos['username']?>
    </div>
    <div class="card-body">
      <img src="<?=$pos['image_url']?>" class="card-img-top" style="width: 25%; height: 25%;">    
    </div>
    <div class="card-footer text">
    <a href="">Like</a> <a href="">Comment</a>
    </div>
    <div class="card-footer text-muted">
    <p class="card-text"><?=$pos['caption']?></p>
      <p><?=$pos['created_at']?></p> 
    <div class="btn-group">
      <a href="<?=base_url('/pos/edit/'. $pos['postid'])?>" class="btn btn-secondary">Edit</a> 
      <form action="<?= base_url('/pos/delete/'. $pos['postid']) ?>" method="post">
        <input type="hidden" name="_method" value="DELETE">
            <?= csrf_field() ?>
        <button type="submit" class="btn btn-danger btn-sm mx-1">Delete</button>
    </div>
      </form>
    </div>
</div>
<br>
<?php 
  }
?>  
<?=$this->endSection()?>
<?php endif; ?>