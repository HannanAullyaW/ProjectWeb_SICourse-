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

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengajar</h6>
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
                        <th>Nama</th>
                        <th>Bidang</th>
                        <th>Info</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <?php foreach ($gambar as $gbr) : ?>
                    <tbody>
                        <tr>
                            <td><?= $gbr->nama_pengajar; ?></td>
                            <td><?= $gbr->bidang_pengajar; ?></td>
                            <td><?= $gbr->info_pengajar; ?></td>
                            <td>
                                <img src="<?= base_url('uploads/' . $gbr->gambar); ?>" style="max-width: 200px;" alt="">
                            </td>

                            <td>
                                <div class="d-flex">
                                    <!-- <a class="btn btn-warning mr-3" href="/edit_pemasukan/a">Edit</a>
                                    <form action="/delete_pemasukan/a" method="post"> -->
                                    <a class="btn btn-warning mr-3" href="/ubahpengajar"><i class="bi bi-pencil-square"></i></a>
                                    <form action="#" method="post">
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