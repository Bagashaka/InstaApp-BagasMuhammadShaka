<?php if (in_groups('pengguna')):?> 
<?= $this->extend('layouts/app');?>
<?= $this->section('content') ?>


<div class="card">
    <div class="card-header">
      <img  class="img logo rounded-circle " src="" alt="" style="width: 50px; height: 50px;">
      Featured
    </div>
    <div class="card-body">
      <img src="..." class="card-img-top" alt="...">    
    </div>
    <div class="card-footer text">
    <a href="">Like</a> <a href="">Comment</a>
    </div>
    <div class="card-footer text-muted">
    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
      2 days ago
    </div>
</div>

<?=$this->endSection()?>
<?php endif; ?>