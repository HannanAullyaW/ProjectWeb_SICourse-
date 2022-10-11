<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>

<div class="hero-wrap js-fullheight" style="background-image: url('assets/templateweb/images/bannerutama.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-5 mt-5 order-md-last">
                <div class="login-wrap p-5 p-md-5  mt-5">
                    <h3 class="mb-4">Mulai Belajar Bersama Kami?</h3>
                    <form action="#" class="signup-form">
                        <div class="form-group">
                            <label class="label" for="name">Nama Lengkap</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label class="label" for="email">Alamat Email</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Kata Sandi</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Konfirmasi Kata Sandi</label>
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                        </div>
                        <div class="form-group d-flex justify-content-end mt-4">
                        </div>
                        <h6 class="text-center">Already have an account? <a href="/masuk">Sign In</a></h6>
                            <tr>
                    </form>

                </div>
            </div>

        </div>
    </div>
</div>


<?= $this->endSection(); ?>