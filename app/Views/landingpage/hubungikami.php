<?= $this->extend('Landingpage/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/templateweb/images/bannerutama.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
            <div class="col-md-9 ftco-animate pb-5 text-center">
                <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="fa fa-chevron-right"></i></a></span> <span><?= $title; ?> <i class="fa fa-chevron-right"></i></span></p>
                <h1 class="mb-0 bread">Hubungi Kami</h1>
            </div>
        </div>
    </div>
</section>

<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="wrapper">
                    <div class="row no-gutters">
                        <div class="col-lg-8 col-md-7 order-md-last d-flex align-items-stretch">
                            <div class="contact-wrap w-100 p-md-5 p-4">
                                <h3 class="mb-4">Satu langkah lebih dekat dengan kami!</h3>
                                <form method="POST" id="contactForm" name="contactForm" class="contactForm">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="name">Nama Lengkap</label>
                                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama" autofocus>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="label" for="email">Alamat Email</label>
                                                <input type="email" class="form-control" name="email" id="email" placeholder="Email" autocomplete="email">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <!-- nnti mau pake dropdown -->
                                                <label class="label" for="subject">Mata Pelajaran</label>
                                                <input type="text" class="form-control" name="subject" id="subject" placeholder="Mata Pelajaran">
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label class="label" for="#">Pesan</label>
                                                <textarea name="message" class="form-control" id="message" cols="30" rows="4" placeholder="Pesan"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <input type="submit" value="Kirim Pesan" class="btn btn-primary">
                                                <div class="submitting"></div>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-5 d-flex align-items-stretch">
                            <div class="info-wrap bg-primary w-100 p-md-5 p-4">
                                <h3>Satu langkah lebih dekat dengan kami!</h3>
                                <p class="mb-4">Kami terbuka untuk saran atau hanya untuk mengobrol.</p>

                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-map-marker"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><a href="https://goo.gl/maps/BDLiwaz15hFPaAWQA">Wisma Istiqomah, Bumi Manti 4</a> </p>

                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-phone"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><a href="https://wa.me/+6288269638116">+62-882-6963-8116</a></p>
                                    </div>
                                </div>
                                <div class="dbox w-100 d-flex align-items-center">
                                    <div class="icon d-flex align-items-center justify-content-center">
                                        <span class="fa fa-paper-plane"></span>
                                    </div>
                                    <div class="text pl-3">
                                        <p><a href="https://satriasapta48@gmail.com">satriasapta48@gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-12 mt-5">
                <div id="map" class="bg-white"></div>
            </div>
        </div>
    </div>
</section>
<?= $this->endSection(); ?>