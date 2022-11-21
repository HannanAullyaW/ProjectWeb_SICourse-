<?= $this->extend('admin/template') ?>
<?= $this->section('content') ?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pengajar</h6>
    </div>
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
                                    <a class="btn btn-warning mr-3" href="/admin/editpengajar/<?= $gbr->id_pengajar ?>"><i class="bi bi-pencil-square"></i></a>
                                    <form action="/admin/hapuspengajar/<?= $gbr->id_pengajar ?>" method="post">
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