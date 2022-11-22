<?= $this->extend('dashboard/template'); ?>
<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2" style="background-image: url('assets/templateweb/images/bannerutama.jpg');">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<p class="breadcrumbs"><span class="mr-2"><a href="index.html">Beranda <i class="fa fa-chevron-right"></i></a></span> <span><?= $title; ?> <i class="fa fa-chevron-right"></i></span></p>
				<h1 class="mb-0 bread">Pelajaran</h1>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section bg-light">
	<div class="container">
		<div class="row">
			<div class="col-lg-2 sidebar">
				<div class="sidebar-box bg-white ftco-animate">
				</div>
			</div>
			<div class="col-lg-9">
				<div class="row">
					<?php foreach ($pelajaran as $pljrn) : ?>
						<div class="col-md-6 d-flex align-items-stretch ftco-animate">
							<div class="project-wrap">
								<img href="<?= base_url('filepelajaran/' . $pljrn->file); ?>" src="<?= base_url('uploads/' . $pljrn->gambar); ?>" alt="gambar" style="width: 398px; height:300px">

								<div class="text p-4">
									<span class="price">Selengkapnya</span>
									<h3><a href="<?= base_url('filepelajaran/' . $pljrn->file); ?>"><?= $pljrn->judul_pelajaran; ?></a></h3>
									<p class="advisor">Pengajar <span><?= $pljrn->nama_pengajar; ?></span></p>
									<ul class="d-flex justify-content-between">
										<li><span class="flaticon-shower"></span><?= $pljrn->kategori_pelajaran; ?></li>
									</ul>
								</div>
							</div>
						</div>
					<?php endforeach ?>
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">

					</div>
				</div>
			</div>
</section>
<?= $this->endSection(); ?>