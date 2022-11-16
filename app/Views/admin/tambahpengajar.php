<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>

<h3><span>PENGAJAR</span></h3>
<?php if (session()->has('success')) : ?>
    <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
<?php endif; ?>
<?php $validation = session()->getFlashdata('validation'); ?>

<div class="card">
    <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Pengajar</h6>
        <div class="card-body">
            <form action="<?= current_url(); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Nama Pengajar</label>
                    <input type="text" value="<?= old('nama_pengajar'); ?>" name="nama_pengajar" id="nama_pengajar" class="form-control" <?= $validation && isset($validation['nama_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Bidang Pengajar</label>
                    <input type="text" value="<?= old('bidang_pengajar'); ?>" name="bidang_pengajar" id="bidang_pengajar" class="form-control" <?= $validation && isset($validation['bidang_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Info Pengajar</label>
                    <input type="text" value="<?= old('info_pengajar'); ?>" name="info_pengajar" id="info_pengajar" class="form-control" <?= $validation && isset($validation['info_pengajar']) ? 'is-invalid' : '' ?>>
                </div>
                <div class="form-group">
                    <label for="">Pilih file gambar</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="gambar" class="form-control" <?= $validation && isset($validation['gambar']) ? 'is-invalid' : '' ?>>
                        <?php if ($validation && isset($validation['gambar'])) : ?>
                            <div class="invalid-feedback"><?= $validation['gambar']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <button class="btn btn-success" type="submit">SIMPAN DATA</button>
            </form>
        </div>
    </div>
</div>

<br><br>

<!-- <div class="card">
    <div class="card-header">
        <div class="card-body">

        </div>
    </div>
</div> -->



<?= $this->endSection(); ?>