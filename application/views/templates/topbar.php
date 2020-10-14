  <section id="topbar" class="d-none d-lg-block">
    <div class="container clearfix">
      <div class="contact-info float-left">
        <i class="icofont-envelope"></i><a href="mailto:contact@example.com">contact@example.com</a>
        <i class="icofont-phone"></i> +1 5589 55488 55
      </div>
      <div class="social-links float-right">
        <a href="<?= base_url('autentifikasi')?>">Login</a>
        <a href="#" class="twitter"><i class="icofont-twitter"></i></a>
        <a href="#" class="facebook"><i class="icofont-facebook"></i></a>
        <a href="#" class="instagram"><i class="icofont-instagram"></i></a>
        <a href="#" class="skype"><i class="icofont-skype"></i></a>
        <a href="#" class="linkedin"><i class="icofont-linkedin"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="container">

      <div class="logo float-left">
        <h1 class="text-light"><a href="index.html"><span>Asysyawaliyyah</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav class="nav-menu float-right d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?= base_url('home'); 
?>">Home</a></li>
          <li class="drop-down"><a href="#profil">Profil</a>
            <ul>
              <li><a href="<?= base_url('home/about');?>">Sekolah</a></li>
              <li><a href="<?= base_url('guru/daftar_guru'); 
?>">Guru</a></li>
                            
              <li><a href="<?= base_url('guru/daftar_staf');?>">Staff</a></li>
                          </ul>
          </li>
          <li><a href="<?= base_url('home/berita');?>">Berita</a></li>
          <li class="drop-down"><a href="<?= base_url('home/pendaftaran');?>">Pendaftaran</a>
            <ul>
              <li><a href="<?= base_url('home/pendaftaran');?>">Pendaftaran</a></li>
              <li><a href="<?= base_url('home/ppdb');?>">Prosedur & Biaya</a></li>
            </ul></li>
          <li><a href="#team">Team</a></li>
          <li class="drop-down"><a href="">Login</a>
            <ul>
              <li><a href="<?= base_url('autentifikasi')?>">Admin</a></li>
              <li><a href="<?= base_url('siswa/autentifikasi')?>">Siswa</a></li>
              <li><a href="#">Guru</a></li>
              <li><a href="#">Staff</a></li>
            </ul>
          </li>
          <li><a href="<?= base_url('home/kontak')?>">Contact Us</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

