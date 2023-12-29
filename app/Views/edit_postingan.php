<?php if (in_groups('pengguna')): ?>
    <?= $this->extend('layouts/app'); ?>
    <?= $this->section('content') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Edit your Post</h1>

        <!-- Menampilkan pesan kesalahan validasi -->
        <?php $validation = \Config\Services::validation(); ?>
        <?php if (session()->has('validation')): ?>
            <div>
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/pos/update/'.$postingan['postid']) ?>" method="POST" enctype="multipart/form-data">
           
            <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="<?= user_id() ?>">

            <div class="mb-3">
                <label for="caption" class="form-label">Caption :</label>
                <input type="text" class="form-control" id="caption" placeholder="caption" name="caption" value="<?= $postingan['caption']?>">
                <?php if (session('validation.caption')): ?>
                    <div class="text-danger"><?= session('validation.caption') ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?= $this->endSection() ?>
<?php endif; ?>
