<?php if (in_groups('pengguna')): ?>
    <?= $this->extend('layouts/app'); ?>
    <?= $this->section('content') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Upload your Comment</h1>

        <!-- Menampilkan pesan kesalahan validasi -->
        <?php $validation = \Config\Services::validation(); ?>
        <?php if (session()->has('validation')): ?>
            <div>
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/comment/store') ?>" method="POST" enctype="multipart/form-data">
            <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="<?= user_id() ?>">
            <input type="hidden" class="form-control" id="post_id" placeholder="post_id" name="post_id" value="<?= $pos['postid'] ?>">

            <div class="mb-3">
                <label for="comment" class="form-label">Comment :</label>
                <input type="text" class="form-control" id="comment" placeholder="comment" name="comment" value="<?= old('comment') ?>">
                <?php if (session('validation.caption')): ?>
                    <div class="text-danger"><?= session('validation.caption') ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?= $this->endSection() ?>
<?php endif; ?>
