  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><?= $judul ?></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url('admin/home') ?>">Home</a></li>
              <li class="breadcrumb-item active"><?= $judul ?></li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
          <div class="row">
            <div class="col-lg-12">
            <?php if (validation_errors()) { ?>
                <div class="alert alert-danger" role="alert">
                    <?= validation_errors(); ?>
                </div>
            <?php } ?>
            <?= $this->session->flashdata('pesan'); ?>
            <div class="col-lg-12 col-md-15">
              <div class="card">
                 <div class="card-header card-header-warning">
                  <p class="card-category">            
                    <a href="" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#mapelBaruModal"><i class="material-icons"></i> Tambahkan</a></p>
                </div>
<div class="col-lg-14"> <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">

            
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">guru</th>
                        <th scope="col">Mata Pelajaran</th>
                        <th scope="col">Kelas</th>
                        <th scope="col">Pilihan</th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    $i = 1;
                    foreach ($setmapel as $a) { ?>
                        <tr>
                            <th scope="row"><?= $i++; ?></th>
                            <td><?= $a['guru'] ?></td>
                            <td><?= $a['mapel'] ?></td>
                            <td><?= $a['kelas']; ?></td>
                        <td>
               <a href="<?= base_url('admin/mapel/hapusSet/').$a['id'];?>" onclick="return confirm('Kamu yakin akan menghapus <?= $judul.' '.$a['id'];?> ?');">
                    <div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div></a>
                </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

            </div>
        </div>
    </div>
</div>
</div>

<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<div class="modal fade" id="mapelBaruModal" tabindex="-1" role="dialog" aria-labelledby="mapelBaruModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mapelBaruModalLabel">Tambah Mapel</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/mapel/simpan'); ?>" method="post" enctype="multipart/form-data">
                <div class="modal-body">
                    

                    <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Guru</label>
                           <select class="form-control select2" style="width: 100%;" name="guru">
                    <option selected="selected">-Pilih Guru-</option>
                            <?php
                            foreach ($guru as $g) { ?>
                                <option value="<?= $g['nip'];?>"><?= $g['nama'];?></option>
                            <?php } ?>
                        </select>
            <?= form_error('guru', '<small class="text-danger pl-3">', '</small>'); ?>                         </div>
                      </div>
                      <div class="col-md-4">
                        <div class="form-group">
                          <label class="bmd-label-floating">Kelas</label>
                           <select class="form-control select2" style="width: 100%;" name="mapel">
                    <option selected="selected">-Pilih Mapel-</option>
                            <?php
                            foreach ($mapel as $m) { ?>
                                <option value="<?= $m['pelajaran'];?>"><?= $m['pelajaran'];?></option>
                            <?php } ?>
                        </select>
            <?= form_error('pelajaran', '<small class="text-danger pl-3">', '</small>'); ?>                         </div>
                      </div>
          <div class="card-body">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <label>Kelas</label>
                  <select class="duallistbox" multiple="multiple" name="kelas">
                    <?php
                            foreach ($kelas as $k) { ?>
                                <option value="<?= $k['nama'];?>"><?= $k['nama'];?></option>
                            <?php } ?>
                    
                  </select>
                </div>
                <!-- /.form-group -->
              </div>
              <!-- /.col -->
            </div>
            <!-- /.row -->
          </div> 
                
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal"><i class="material-icons"><svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
</svg></i> Close</button>
                    <button type="submit" class="btn btn-primary"><i class="material-icons"><svg class="bi bi-plus-circle" width="1em" height="1em" viewBox="0 0 16 16" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M8 3.5a.5.5 0 01.5.5v4a.5.5 0 01-.5.5H4a.5.5 0 010-1h3.5V4a.5.5 0 01.5-.5z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M7.5 8a.5.5 0 01.5-.5h4a.5.5 0 010 1H8.5V12a.5.5 0 01-1 0V8z" clip-rule="evenodd"/>
  <path fill-rule="evenodd" d="M8 15A7 7 0 108 1a7 7 0 000 14zm0 1A8 8 0 108 0a8 8 0 000 16z" clip-rule="evenodd"/>
</svg></i> Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
