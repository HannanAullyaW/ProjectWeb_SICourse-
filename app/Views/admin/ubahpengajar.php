<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>

<h3><span>UBAH PENGAJAR</span></h3>
<?php if (session()->has('success')) : ?>
    <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
<?php endif; ?>
<?php $validation = session()->getFlashdata('validation'); ?>

<div class="card">
    <div class="card-header">
        <div class="card-body">
            <form action="<?= '/admin/updatepengajar/' . $edit->id_pengajar; ?>" method="POST" enctype="multipart/form-data" >
                <div class="form-group">
                    <label for="">Nama Pengajar</label>
                    <input type="text" value="<?= $edit->nama_pengajar ?>" name="nama_pengajar" id="nama_pengajar" class="form-control" <?= $validation && isset($validation['nama_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Bidang Pengajar</label>
                    <input type="text" value="<?= $edit->bidang_pengajar ?>" name="bidang_pengajar" id="bidang_pengajar" class="form-control" <?= $validation && isset($validation['bidang_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Info Pengajar</label>
                    <input type="text" value="<?= $edit->info_pengajar ?>" name="info_pengajar" id="info_pengajar" class="form-control" <?= $validation && isset($validation['info_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Pilih file gambar</label>
                    <input type="file" name="gambar" id="gambar" class="form-control" <?= $validation && isset($validation['gambar']) ? 'is-invalid' : '' ?>>
                        <?php if ($validation && isset($validation['gambar'])) : ?>
                            <div class="invalid-feedback"><?= $validation['gambar']; ?></div>
                        <?php endif; ?>
                </div>
                <button class="btn btn-success" type="submit">SIMPAN PERUBAHAN</button>
            </form>
        </div>
    </div>
</div>

<br><br>



<?= $this->endSection(); ?>