<?= $this->extend('dashboard/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/templateweb/images/bannerutama.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="fa fa-chevron-right"></i></a></span> <span><?= $title; ?> <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread"><?= $title; ?></h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section bg-light">
    <div class="container">
        <div class="row">
            <?php foreach($gambar as $gbr): ?>

                
            <div class="col-md-6 col-lg-3 ftco-animate d-flex align-items-stretch">
                <div class="staff">
                    <div class="img-wrap d-flex align-items-stretch">
                        <div class="img align-self-stretch">
                            <img src="<?= base_url('uploads/'.$gbr->gambar); ?>" style="height: 200px;  width: 100px;" alt="">
                        </div>
                    </div>
                    <div class="text pt-3">
                        <h3><a href="instructor-details.html"><?= $gbr->nama_pengajar; ?></a></h3>
                        <span class="position mb-2"><?= $gbr->bidang_pengajar; ?></span>
                        <div class="faded">
                            <p><?= $gbr->info_pengajar; ?></p>
                            <ul class="ftco-social text-center">
                                <li class="ftco-animate"><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="fa fa-google"></span></a></li>
                                <li class="ftco-animate"><a href="#"><span class="fa fa-instagram"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="row mt-5">
            <div class="col text-center">
                <div class="block-27">
                    <ul>
                        <li><a href="#">&lt;</a></li>
                        <li class="active"><span>1</span></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">5</a></li>
                        <li><a href="#">&gt;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>