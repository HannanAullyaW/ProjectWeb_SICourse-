<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<!-- <div class="row d-flex justify-content-center mt-5">
    <div class="col-md-5">
        <h2>Tambahkan Pengajar</h2>
        <form action="uploadpengajar" method="POST">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pengajar</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Mata Pelajaran</label>
                <input type="text" class="form-control" id="name" name="email">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div> -->

<h3><span>TAMBAH PENGAJAR</span></h3>
<?php if (session()->has('success')) : ?>
    <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
<?php endif; ?>
<?php $validation = session()->getFlashdata('validation'); ?>
<div class="card">
    <div class="card-header">
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

                <div class="">
    <input type="radio"  id="customControlValidation3" name="radio-stacked" required>
    <label class="custom-control-label" for="customControlValidation3">Or toggle this other custom radio</label>
    <div class="invalid-feedback">More example invalid feedback text</div>
  </div>


                <div class="custom-control custom-radio mb-3">
                    <label class="custom-control-input"  for="">Pilih file gambar</label>
                    <div class="custom-file">
                        <input  id="customControlValidation3" type="file" name="gambar" id="gambar"  <?= $validation && isset($validation['gambar']) ? 'is-invalid' : '' ?>>
                        <?php if ($validation && isset($validation['gambar'])) : ?>
                            <div class="invalid-feedback"><?= $validation['gambar']; ?></div>
                        <?php endif; ?>
                    </div>
                </div>
                <button class="btn btn-success" type="submit"><i class="bi bi-plus-square-fill mr-1"></i> TAMBAH DATA</button>
            </form>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>