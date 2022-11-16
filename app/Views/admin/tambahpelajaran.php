<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>

<!-- <!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>tambah pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <br><br>
        <div class="col-6"> -->
<h3><span>PELAJARAN</span></h3>
<?php if (session()->has('success')) : ?>
    <p class="text-success"><?= session()->getFlashdata('success'); ?></p>
<?php endif; ?>
<?php $validation = session()->getFlashdata('validation'); ?>
<div class="card">
    <div class="card-header">
    <h6 class="m-0 font-weight-bold text-primary">Tambah Pelajaran</h6>
        <div class="card-body">
            <form action="<?= current_url(); ?>" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Judul Pelajaran</label>
                    <input type="text" value="<?= old('nama_pengajar'); ?>" name="judul_pelajaran" id="judul_pelajaran" class="form-control" <?= $validation && isset($validation['judul_pelajaran']) ? 'is-invalid' : '' ?>>
                    <label for="">Nama Pengajar</label>
                    <input type="text" value="<?= old('bidang_pengajar'); ?>" name="nama_pengajar" id="nama_pengajar" class="form-control" <?= $validation && isset($validation['nama_pengajar']) ? 'is-invalid' : '' ?>>
                    <label for="inputState">Kategori Pelajaran</label>
                    <select id="inputState" name="kategori_pelajaran" id="kategori_pelajaran" class="form-control" <?= $validation && isset($validation['kategori_pelajaran']) ? 'is-invalid' : '' ?>>
                        <option selected>TIU</option>
                        <option selected>TKP</option>
                        <option selected>TWK</option>
                    </select>
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




<?= $this->endSection(); ?>