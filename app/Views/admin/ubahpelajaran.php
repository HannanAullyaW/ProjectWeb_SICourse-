<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>

<h3><span>UBAH PELAJARAN</span></h3>
<?php if (session()->has('success')) : ?>
    <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
<?php endif; ?>
<?php $validation = session()->getFlashdata('validation'); ?>

<div class="card">
    <div class="card-header">
        <div class="card-body">
            <form action="<?= '/admin/updatepelajaran/' . $edit->id_pelajaran; ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Pelajaran</label>
                    <input type="text" value="<?= $edit->judul_pelajaran ?>" name="judul_pelajaran" id="judul_pelajaran" class="form-control" <?= $validation && isset($validation['judul_pelajaran']) ? 'is-invalid' : '' ?>>
                    <label for="">Nama Pengajar</label>
                    <input type="text" value="<?= $edit->nama_pengajar ?>" name="nama_pengajar" id="nama_pengajar" class="form-control" <?= $validation && isset($validation['nama_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="">Kategori Pelajaran</label>
                    <input type="text" value="<?= $edit->kategori_pelajaran ?>" name="kategori_pelajaran" id="kategori_pelajaran" class="form-control" <?= $validation && isset($validation['kategori_pelajaran']) ? 'is-invalid' : '' ?>>
<!-- 
                    <div class="form-group"> -->
                    <label for="">Gambar</label>
                    <div class="custom-file">
                        <input type="file" name="gambar" id="gambar" class="form-control" <?= $validation && isset($validation['gambar']) ? 'is-invalid' : '' ?>>
                        <?php if ($validation && isset($validation['gambar'])) : ?>
                            <div class="invalid-feedback"><?= $validation['gambar']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <!-- <div class="form-group"> -->
                    <label for="">File</label>
                    <div class="custom-file">
                        <input type="file" name="file" id="file" class="form-control" <?= $validation && isset($validation['file']) ? 'is-invalid' : '' ?>>
                        <?php if ($validation && isset($validation['file'])) : ?>
                            <div class="invalid-feedback"><?= $validation['file']; ?></div>
                            <?php endif; ?>
                            <label for="" style="color: red;">Harus Format .PDF</label>
                    </div>
   
                </div>
                </div>
                <button class="btn btn-success" type="submit">SIMPAN PERUBAHAN</button>
            </form>
        </div>
    </div>
</div>

<br><br>



<?= $this->endSection(); ?>