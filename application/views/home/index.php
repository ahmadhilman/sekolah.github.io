


	<div class="home">
		<div class="home_slider_container">
			
			<!-- Home Slider -->
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Home Slider Item -->
				<?php foreach ($berita as $key => $value) { ?>
				<div class="owl-item">
					<div class="home_slider_background" style="background-image: url(<?= base_url('assets/img/info/'.$value->image)?>);"></div>
					<div class="home_slider_content">
						<div class="container" >
							<div class="row">
								<div class="col text-center">
									<div class="home_slider_title" style="color: black"><?= $value->jdl ?></div>
									<div class="home_slider_subtitle"><?= substr(strip_tags($value->isi),0,90)  ?>...</div>
																	                <small><p><?= $value->nama; ?> | <?= $value->tgl_input; ?></p></small></a>
									<button type="submit" class="home_search_button"><a href="<?= base_url('home/berita_detail/').$value->id_ber; ?>">search </a></button>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php } ?>
				

			</div>
		</div>

		<!-- Home Slider Nav -->

		<div class="home_slider_nav home_slider_prev"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
		<div class="home_slider_nav home_slider_next"><i class="fa fa-angle-right" aria-hidden="true"></i></div>
	</div>
	<main id="main">


		<!-- ======= About Lists Section ======= -->
		<section class="about-lists" >
			<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('unicat/') ?>images/courses_background.jpg" data-speed="0.8"></div>
<div class="section-title">
			
				
					<h2>Pengumuman</h2>
					
				</div>

				<div class="row">
										<div class="col-lg-10 col-md-8" data-aos="fade-up">
											
				<?php foreach ($peng as $key => $value) { ?>

					<h2><?= $value->jdl ?></h3>
					<h4><?= $value->isi ?></h4>
					<?php } ?>
				
				</div>
				</div>

			</div>
		</section><!-- End About Lists Section -->

		<!-- ======= Counts Section ======= -->
		<section class="counts section-bg" style="background-image: url(<?= base_url('assets/img/bg_all.jpg')?>);">
			<div class="container">

				<div class="row">

					<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
						<div class="count-box">
							<i class="icofont-simple-smile" style="color: #20b38e;"></i>
							<span data-toggle="counter-up">232</span>
							<p>Happy Clients</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
						<div class="count-box">
							<i class="icofont-document-folder" style="color: #c042ff;"></i>
							<span data-toggle="counter-up">521</span>
							<p>Projects</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
						<div class="count-box">
							<i class="icofont-live-support" style="color: #46d1ff;"></i>
							<span data-toggle="counter-up">1,463</span>
							<p>Hours Of Support</p>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
						<div class="count-box">
							<i class="icofont-users-alt-5" style="color: #ffb459;"></i>
							<span data-toggle="counter-up"><?= $this->ModelGuru->cekGuru(['id'])->num_rows(); ?></span>
							<p>Jumlah Guru</p>
						</div>
					</div>

				</div>

			</div>
		</section><!-- End Counts Section -->

		<!-- ======= Services Section ======= -->
		<section class="services">
			<div class="section_background parallax-window" data-parallax="scroll" data-image-src="<?= base_url('unicat/') ?>images/courses_background.jpg" data-speed="0.8"></div>
<div class="section-title">
			<div class="container">
				<div class="section-title">
					<h2>Keuntungan Sekolah Di sini</h2>
				</div>

				<div class="row">
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
						<div class="icon"><i class="icofont-users"></i></div>
						<h4 class="title"><a href="">Akhlakul Karimah</a></h4>
						<p class="description">Menciptakan siswa-siswi yang berakhlakul karimah.</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
						<div class="icon"><i class="icofont-computer"></i></div>
						<h4 class="title"><a href="">Teknologi</a></h4>
						<p class="description">Menciptakan siswa-siswi yang tidak gaptek akan teknologi di era digital 4.0</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
						<div class="icon"><i class="icofont-"><svg class="bi bi-map" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M15.817.613A.5.5 0 0116 1v13a.5.5 0 01-.402.49l-5 1a.502.502 0 01-.196 0L5.5 14.51l-4.902.98A.5.5 0 010 15V2a.5.5 0 01.402-.49l5-1a.5.5 0 01.196 0l4.902.98 4.902-.98a.5.5 0 01.415.103zM10 2.41l-4-.8v11.98l4 .8V2.41zm1 11.98l4-.8V1.61l-4 .8v11.98zm-6-.8V1.61l-4 .8v11.98l4-.8z" clip-rule="evenodd"/>
</svg>
</i></div>
						<h4 class="title"><a href="">Lokasi</a></h4>
						<p class="description">Lokasi kami yang strategis di pinggir jalan Aria Santika</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
						<div class="icon"><i class="icofont-star"></i></div>
						<h4 class="title"><a href="">Prestasi</a></h4>
						<p class="description">Prestasi siswa-siswi kami di bidang akademik maupun non akademik.</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="400">
						<div class="icon"><i class="icofont-"><svg class="bi bi-tools" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" d="M0 1l1-1 3.081 2.2a1 1 0 01.419.815v.07a1 1 0 00.293.708L10.5 9.5l.914-.305a1 1 0 011.023.242l3.356 3.356a1 1 0 010 1.414l-1.586 1.586a1 1 0 01-1.414 0l-3.356-3.356a1 1 0 01-.242-1.023L9.5 10.5 3.793 4.793a1 1 0 00-.707-.293h-.071a1 1 0 01-.814-.419L0 1zm11.354 9.646a.5.5 0 00-.708.708l3 3a.5.5 0 00.708-.708l-3-3z" clip-rule="evenodd"/>
	<path fill-rule="evenodd" d="M15.898 2.223a3.003 3.003 0 01-3.679 3.674L5.878 12.15a3 3 0 11-2.027-2.027l6.252-6.341A3 3 0 0113.778.1l-2.142 2.142L12 4l1.757.364 2.141-2.141zm-13.37 9.019L3.001 11l.471.242.529.026.287.445.445.287.026.529L5 13l-.242.471-.026.529-.445.287-.287.445-.529.026L3 15l-.471-.242L2 14.732l-.287-.445L1.268 14l-.026-.529L1 13l.242-.471.026-.529.445-.287.287-.445.529-.026z" clip-rule="evenodd"/>
</svg></i></div>
						<h4 class="title"><a href="">Fasilitas</a></h4>
						<p class="description">MA Al-Ijtihad menunjang fasilitas dalam proses Kegiatan Belajar Mengajar yang kondusif dan efektif.</p>
					</div>
					<div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="500">
						<div class="icon"><i class="icofont-mail"></i></div>
						<h4 class="title"><a href="">Saran & Kritik</a></h4>
						<p class="description">Kami terbuka kepada wali murid untuk memberikan saran dan kritik yang membangun bagi siswa/i ataupun sekolah.

</p>
					</div>
				</div>

			</div>
		</section><!-- End Services Section -->

		<!-- ======= Our Portfolio Section ======= -->
		<section id="portfolio" class="portfolio section-bg" style="background-image: url(<?= base_url('assets/img/bg_all.jpg')?>);">
			<div class="container" data-aos="fade-up" data-aos-delay="100">

				<div class="section-title">
					<h2>Top 6 Berita</h2>
					
				</div>

				<div class="row">
					<div class="col-lg-12">
						<ul id="portfolio-flters">
							<li data-filter="*" class="filter-active">All</li>
							<?php foreach ($kategori as $k) { ?>
							<li data-filter=".filter-<?= $k['kategori'] ?>"><?= $k['kategori'] ?></li>
													<?php } ?>
						</ul>
					</div>
				</div>

				<div class="row portfolio-container">
								<?php foreach ($berita as $key => $value) { ?>
					<div class="col-lg-4 col-md-6 portfolio-item filter-<?= $value->kategori ?>">
						<div class="portfolio-wrap">
							<img src="<?= base_url('assets/img/info/'.$value->image) ?>" class="img-fluid" alt="">
							<div class="portfolio-info">
								<h4><?= $value->jdl ?></h4>
								<p><?= substr(strip_tags($value->isi),0,70)  ?>...<br><?= $value->kategori ?></p>
								<div class="portfolio-links">
									<a href="<?= base_url('assets/img/info/'.$value->image) ?>"  data-gall="portfolioGallery" class="venobox" title="<?= $value->jdl ?>"><i class="icofont-eye"></i></a>
									<a href="<?= base_url('home/berita_detail/').$value->id_ber; ?>" title="More Details"><i class="icofont-external-link"></i></a>
								</div>
							</div>
						</div>
					</div>
				<?php } ?>
					
				</div>

			</div>
		</section><!-- End Our Portfolio Section -->



	</main><!-- End #main -->