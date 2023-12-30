<?php if (in_groups('pengguna')): ?>
    <?= $this->extend('layouts/app'); ?>
    <?= $this->section('content') ?>

    <div class="container mt-5">
        <h1 class="mb-4">Upload your Post</h1>

        <!-- Menampilkan pesan kesalahan validasi -->
        <?php $validation = \Config\Services::validation(); ?>
        <?php if (session()->has('validation')): ?>
            <div>
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="<?= base_url('/pos/store') ?>" method="POST" enctype="multipart/form-data">
            <div class="mb-3">
                <label for="image_url" class="form-label">Foto: </label>
                <input type="file" class="form-control" name="image_url" id="image_url">
                <?php if (session('validation.image_url')): ?>
                    <div class="text-danger"><?= session('validation.image_url') ?></div>
                <?php endif; ?>
            </div>

            <input type="hidden" class="form-control" id="user_id" placeholder="user_id" name="user_id" value="<?= user_id() ?>">

            <div class="mb-3">
                <label for="caption" class="form-label">Caption :</label>
                <input type="text" class="form-control" id="caption" placeholder="caption" name="caption" value="<?= old('caption') ?>">
                <?php if (session('validation.caption')): ?>
                    <div class="text-danger"><?= session('validation.caption') ?></div>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>

    <?= $this->endSection() ?>
<?php endif; ?>
