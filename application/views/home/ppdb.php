  <!-- ======= Contact Us Section ======= -->
    <section class="counts contact" style="background-image: url(<?= base_url('assets/img/bg_all.jpg')?>);">
      <div class="container">
<div class="section-title">
          <h2>Prosedur & Biaya</h2>
          <hr>
        </div>
        <div class="row">
<?php foreach ($ppdb as $p) ?>
          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up">
            <div class="count-box">
              <i class="icofont-document-folder" style="color: #20b38e;"></i>
              <h3>Rp.              <span data-toggle="counter-up"><?= rupiah($p['b_daftar']); ?></span></h3>
              <p>Biaya Pendaftaran</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="200">
            <div class="count-box">
              <i class="icofont-bill" style="color: #c042ff;"></i>
              <h3>Rp. <span data-toggle="counter-up"><?= rupiah($p['b_spp']); ?></span></h3>
              <p>Biaya SPP</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="400">
            <div class="count-box">
              <i class="icofont-live-support" style="color: #46d1ff;"></i>
              <h3>Rp. <span data-toggle="counter-up"><?= rupiah($p['b_seragam']); ?></span></h3>
              <p>Biaya Seragam + AtK + Tas</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 text-center" data-aos="fade-up" data-aos-delay="600">
            <div class="count-box">
              <i class="icofont-users-alt-5" style="color: #ffb459;"></i>
              <h3>Rp. <span data-toggle="counter-up"><?= rupiah($p['b_bangunan']); ?></span></h3>
              <p>Biaya Bangunan</p>
            </div>
          </div>

        </div>
<div class="section-title">
          <h2>TOTAL = Rp. <?= rupiah($p['b_daftar'] + $p['b_spp'] + $p['b_seragam'] + $p['b_bangunan']); ?>,-</h2>
          <hr>
        </div>

          <div class="col-lg-12" style="background: #fff;" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="form-row">
                <div class="form-group" >
                  
                  <?= $p['prosedur']; ?>
                  
                  <div class="validate"></div>
                </div>
              
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Us Section -->

