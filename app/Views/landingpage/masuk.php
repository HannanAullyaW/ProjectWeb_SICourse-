<?= $this->extend('landingpage/template'); ?>
<?= $this->section('content'); ?>

<div class="hero-wrap js-fullheight" style="background-image: url('assets/templateweb/images/bannerutama.jpg');">
    <div class="overlay">
    </div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-5 mt-5 order-md-last">
                <div class="login-wrap p-5 p-md-5  mt-5">
                    <h3 class="mb-4">Ayo Mulai Belajar!</h3>
                    <?php if (session()->getFlashdata('error')) : ?>
                        <div class="alert alert-danger alert-dismissible show fade">
                            <div class="alert-body">
                                <button class="close" data-dismiss="alert">x</button>
                                <b>Error !</b>
                                <?= session()->getFlashdata('error'); ?>
                            </div>
                        </div>
                    </div>
                    <?php elseif (!empty(session()->getFlashdata('message'))) : ?>
                        <div class="alert alert-info">
                            <?= session()->getFlashdata('message') ?>
                        </div>
                    <?php endif; ?>
                    <form method="POST" action="<?= site_url('auth/prosesMasuk'); ?>" class="signup-form">
                        <div class="form-group">
                            <label class="label" for="email">Alamat Email</label>
                            <input type="text" class="form-control" name="email" id="email" required autofocus>
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" id="password" required autofocus>
                        <div class="form-group d-flex justify-content-center mt-4">
                                <button type="submit" class="btn btn-primary submit">Masuk</span></button>
                            </div>
                    </div>
                            <h6 class="text-center">Belum Punya Akun? <a href="/daftar">Daftar</a></h6>
                    </form>        
                </div>
            </div>
                    </div>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>