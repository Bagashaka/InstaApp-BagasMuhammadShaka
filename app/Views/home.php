<?php if (in_groups('pengguna')): ?>
    <?= $this->extend('layouts/app'); ?>
    <?= $this->section('content') ?>

    <?php if (empty($postingan)): ?>
      <div class="alert alert-info" role="alert">
      <center><strong>No posts available.</strong></center>
        </div>
    <?php else: ?>
        <?php
        $nomor = 1;
        foreach ($postingan as $pos):
        ?>

        <div class="card">
            <div class="card-header">
                <img class="img logo rounded-circle " src="<?= $pos['user_image'] ?>" alt="" style="width: 50px; height: 50px;">
                <?= $pos['username'] ?>
            </div>
            <div class="card-body">
                <img src="<?= $pos['image_url'] ?>" class="card-img-top" style="width: 25%; height: 25%;">
            </div>
            <div class="card-footer text">
                <a href="#">Like</a>
                <a href="<?= base_url('/comment/show/' . $pos['postid']) ?>"><i><?= $pos['comment_count'] ?></i> Comment</a>
            </div>
            <div class="card-footer text-muted">
                <p class="card-text"><?= $pos['caption'] ?></p>
                <p><?= $pos['created_at'] ?></p>
            </div>
        </div>
        <br>

        <?php
            $nomor++;
        endforeach;
        ?>
    <?php endif; ?>

    <?= $this->endSection() ?>
<?php endif; ?>
