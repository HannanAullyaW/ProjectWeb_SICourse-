<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>
<div class="row d-flex justify-content-center mt-5">
    <div class="col-md-5">
        <h2>Pendaftaran Mahasiswa</h2>
        <form action="" method="POST">
            <?= csrf_field(); ?>
            <div class="mb-3">
                <label for="name" class="form-label">Nama Pengajar</label>
                <input type="text" class="form-control" id="name" name="name">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Mata Pelajaran</label>
                <input type="email" class="form-control" id="name" name="email">
            </div>

            <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat">
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<?= $this->endSection(); ?>