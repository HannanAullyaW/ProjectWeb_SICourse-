<?= $this->extend('templates/template'); ?>
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
			<div class="col-lg-3 sidebar">
				<div class="sidebar-box bg-white ftco-animate">
					<form action="#" class="search-form">
						<div class="form-group">
							<span class="icon fa fa-search"></span>
							<input type="text" class="form-control" placeholder="Search...">
						</div>
					</form>
				</div>

				<div class="sidebar-box bg-white p-4 ftco-animate">
					<h3 class="heading-sidebar">Kategori Kursus</h3>
					<form action="#" class="browse-form">
						<label for="option-category-1"><input type="checkbox" id="option-category-1" name="vehicle" value="" checked>TWK (Tes Wawasan Kebangsaan)</label><br>
						<label for="option-category-2"><input type="checkbox" id="option-category-2" name="vehicle" value=""> TIU (Tes Intelegensi Umum)</label><br>
						<label for="option-category-3"><input type="checkbox" id="option-category-3" name="vehicle" value=""> TKP (Tes Karakteristik Pribadi)</label><br>
					</form>
				</div>

				<div class="sidebar-box bg-white p-4 ftco-animate">
					<h3 class="heading-sidebar">Pengajar</h3>
					<form action="#" class="browse-form">
						<label for="option-instructor-1"><input type="checkbox" id="option-instructor-1" name="vehicle" value="" checked> Ronald Jackson</label><br>
						<label for="option-instructor-2"><input type="checkbox" id="option-instructor-2" name="vehicle" value=""> John Dee</label><br>
						<label for="option-instructor-3"><input type="checkbox" id="option-instructor-3" name="vehicle" value=""> Nathan Messy</label><br>
					</form>
				</div>

				<div class="sidebar-box bg-white p-4 ftco-animate">
					<h3 class="heading-sidebar">Tipe Kursus</h3>
					<form action="#" class="browse-form">
						<label for="option-course-type-1"><input type="checkbox" id="option-course-type-1" name="vehicle" value="" checked>Kumpulan Soal</label><br>
						<label for="option-course-type-2"><input type="checkbox" id="option-course-type-2" name="vehicle" value=""> Kumpulan Materi</label><br>
						<label for="option-course-type-3"><input type="checkbox" id="option-course-type-3" name="vehicle" value=""> Video</label><br>
					</form>
				</div>

				<!-- <div class="sidebar-box bg-white p-4 ftco-animate">
						<h3 class="heading-sidebar">Software</h3>
						<form action="#" class="browse-form">
							<label for="option-software-1"><input type="checkbox" id="option-software-1" name="vehicle" value="" checked> Adobe Photoshop</label><br>
							<label for="option-software-2"><input type="checkbox" id="option-software-2" name="vehicle" value=""> Adobe Illustrator</label><br>
							<label for="option-software-3"><input type="checkbox" id="option-software-3" name="vehicle" value=""> Sketch</label><br>
							<label for="option-software-4"><input type="checkbox" id="option-software-4" name="vehicle" value=""> WordPress</label><br>
							<label for="option-software-5"><input type="checkbox" id="option-software-5" name="vehicle" value=""> HTML &amp; CSS</label><br>
						</form>
					</div> -->
			</div>
			<div class="col-lg-9">
				<div class="row">
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-1.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Soal TWK Tahun 2010</a></h3>
								<p class="advisor">Pengunggah <span>Ronald Jackson</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-2.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Soal TKP Tahun 2019</a></h3>
								<p class="advisor">Pengunggah <span>Ronald Jackson</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-3.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Soal TIU Tahun 2018</a></h3>
								<p class="advisor">Pengunggah <span>John Dee</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>

					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-4.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Materi TWK Course Us!</a></h3>
								<p class="advisor">Pengunggah <span>John Dee</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-5.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Materi TIU dan TKP Course Us!</a></h3>
								<p class="advisor">Pengunggah <span>Nathan Messy</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 d-flex align-items-stretch ftco-animate">
						<div class="project-wrap">
							<a href="#" class="img" style="background-image: url(images/work-6.jpg);">
								<span class="price">Selengkapnya</span>
							</a>
							<div class="text p-4">
								<h3><a href="#">Video Belajar</a></h3>
								<p class="advisor">Pengunggah <span>Nathan Messy</span></p>
								<ul class="d-flex justify-content-between">
									<li><span class="flaticon-shower"></span>2300</li>
									<li class="price">Free</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="row mt-5">
					<div class="col">
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
		</div>
</section>
<?= $this->endSection(); ?>