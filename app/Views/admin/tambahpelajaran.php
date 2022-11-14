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
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pelajaran</h6>
    </div>
    <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
        <hr>
        <div class="input-group">
            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
            <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                    <i class="fas fa-search fa-sm"></i>
                </button>
            </div>
        </div>
    </form>


    
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Judul Pelajaran</th>
                        <th>Nama Pengajar</th>
                        <th>Kategori Pelajaran</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($gambar as $gbr) : ?>
                    <tbody>
                        <tr>
                            <td><?= $gbr->judul_pelajaran; ?></td>
                            <td><?= $gbr->nama_pengajar; ?></td>
                            <td><?= $gbr->kategori_pelajaran; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/' . $gbr->gambar); ?>" style="max-width: 200px;" alt="">
                            </td>

                            <td>
                                <div class="d-flex">
                                    <!-- <a class="btn btn-warning mr-3" href="/edit_pemasukan/a">Edit</a>
                                    <form action="/delete_pemasukan/a" method="post"> -->
                                    <a class="btn btn-warning mr-3" href="/admin/editpelajaran/<?= $gbr->id_pelajaran?>"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/admin/hapuspelajaran/<?= $gbr->id_pelajaran?>" method="post">
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button type="submit" class="btn btn-danger"><i class="bi bi-trash-fill"></i></button>
                                    </form>
                                </div>
                            </td>

                        </tr>
                    </tbody>
                <?php endforeach; ?>
            </table>
        </div>
    </div>
</div>



<?= $this->endSection(); ?>