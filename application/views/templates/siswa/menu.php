<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Asy-Syawaliyyah | <?= $judul ?></title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="icon" type="image/png" href="<?= base_url('assets/img/'); ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/dist/css/adminlte.min.css">
   <!-- Daterange picker -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/daterangepicker/daterangepicker.css">
  <!-- Google Font: Source Sans Pro -->
  <!-- Ekko Lightbox -->
  <link rel="stylesheet" href="<?= base_url() ?>plugins/ekko-lightbox/ekko-lightbox.css">
  <!-- summernote -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/summernote/summernote-bs4.css">
  <!-- SweetAlert2 -->
  <link rel="stylesheet" href="<?= base_url() ?>AdminLTE/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">

  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>
<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed ">
<div class="wrapper">
   <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
    </ul>

   

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Messages Dropdown Menu -->
            <!-- Notifications Dropdown Menu -->
      <li class="nav-item dropdown">
        <a class="nav-link" data-toggle="dropdown" href="#">
          <i class="far fa-user"></i></a>
          <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
            <span class="dropdown-item dropdown-header">Hai, <?= $this->session->userdata('nama') ?></span>
            <div class="dropdown-divider"></div>
          <a href="<?= base_url('siswa/home/profile') ?>" class="dropdown-item">
            <i class="fas fa-user mr-2"></i> Profile </a>
          <div class="dropdown-divider"></div>
          <a href="<?= base_url('admin/user/ubahPassword') ?>" class="dropdown-item">
            <i class="fas fa-retweet mr-2"></i> Reset Password </a>
            <div class="dropdown-divider"></div>
          <a href="<?= base_url('siswa/autentifikasi/logout') ?>" class="dropdown-item">
            <i class="fas fa-power-off mr-2"></i> Logout </a>
          
        </div>
      </li>
        
      
    </ul>
  </nav>
  <!-- /.navbar -->
    <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="<?= base_url('adminlte/') ?>dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">AdminLTE 3</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="<?= base_url('assets/img/siswa/'.$user['image']) ?>" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?= $user['nama'] ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="<?= base_url('admin/home') ?>" class="nav-link ">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Data Profile
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/info') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Info</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/profile') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Profile</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/visi_misi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Visi & Misi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/organisasi') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Organisasi</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/r_strategis') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rencana Strategis</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/r_kerja') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Rencana Kerja</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/lakip') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data LAKIP</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/info/p_pelayanan') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Profile Pelayanan</p>
                </a>
              </li>
            </ul>

          </li>
          <li class="nav-item">
        <a class="nav-link" href="<?= base_url('admin/pengadaan') ?>">
          <i class="nav-icon fas fa-fw fa-database"></i>
          <p>Data Pengadaan</p></a>
      </li>
      <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-info"></i>
              <p>
                Data Info
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/berita') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Berita</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/Pengumuman') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Pengumuman</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/gallery') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Gallery</p>
                </a>
              </li>

            </ul>
<li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-list"></i>
              <p>
                Data Web
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?= base_url('admin/home/menu') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Menu</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="<?= base_url('admin/web') ?>" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Data Web</p>
                </a>
              </li>
          </li>

        </ul>
      </li>
    </li>
    <li class="nav-item">
            <a href="<?= base_url('admin/user') ?>" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Data User
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>