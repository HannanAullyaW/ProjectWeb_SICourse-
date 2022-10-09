<?= $this->extend('templates/template'); ?>
<?= $this->section('content'); ?>



<section class="hero-wrap hero-wrap-2" style="background-image: url('images/bg_2.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-5 order-md-last">
                <div class="login-wrap p-4 pt-md-4 pr-md-5 pl-md-5 mt-5">
                    <h3 class="mb-4">Register Now</h3>
                    <form action="#" class="signup-form">
                        <div class="form-group">
                            <label class="label" for="name">Full Name</label>
                            <input type="text" class="form-control" name="nama" id="nama">
                        </div>
                        <div class="form-group">
                            <label class="label" for="email">Email Address</label>
                            <input type="text" class="form-control" name="email" id="email">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Password</label>
                            <input type="password" class="form-control" name="password" id="password">
                        </div>
                        <div class="form-group">
                            <label class="label" for="password">Confirm Password</label>
                            <input type="password" class="form-control" name="confirmpassword" id="confirmpassword">
                        </div>
                        <div class="form-group d-flex justify-content-end mt-4">
                            <button type="submit" class="btn btn-primary submit"><span class="fa fa-paper-plane"></span></button>
                        </div>
                        <h6 class="text-center">Already have an account? <a href="#signin">Sign In</a></h6>
                    </form>
                    
                </div>
            </div>

        </div>
    </div>
</section>


<?= $this->endSection(); ?>