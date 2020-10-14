    <div class="courses" >

    <!-- ##### Blog Area Start ##### -->
    <div class="blog-area mt-25 section-padding-90 portfolio mb-3">

        <div class="container" data-aos="fade-up" data-aos-delay="100">
           <div class="section-title">
          <h2>BERITA</h2><hr>
          
        </div>
                      <div class="row">
                <div class="col-12 col-md-8">
                    <div class="academy-blog-posts" >
<div class="row portfolio-container">
                
        <?php foreach ($berita as $key => $value) { ?>
          <a href="<?= base_url('home/berita_detail/').$value->id_ber; ?>">
          <div class="col-lg-6 col-md-6 portfolio-item filter-<?= $value->kategori ?>">
            <div class="portfolio-wrap">
              <img src="<?= base_url('assets/img/info/'.$value->image) ?>" class="img-fluid" alt="">
              <div class="carousel-content container">
               <h2 class="animated fadeInDown"><a href=""><?= $value->jdl ?><br>
                <small><p><?= $value->nama; ?> | <?= $value->tgl_input; ?></p></small></a></h2>
                <p class="animated fadeInUp"><?= substr(strip_tags($value->isi),0,70)  ?>...</p><center>
                <a href="<?= base_url('home/berita_detail/').$value->id_ber; ?>" class="btn btn-primary btn-link btn-sm"> <i class="material-icons">Selengkpanya</i></a></center>
              </div>

            </div>
          </div>
        </a>
<?php } ?>

        </div>
                    </div>
                    <!-- Pagination Area Start -->
                   <nav aria-label="...">
                  <?php
                  if (isset($paginasi)) {
                     echo $paginasi;
                   } 
                  ?>
</nav>      </div> 
                                            <div class="col-12 col-md-4">
                    <div class="academy-blog-sidebar">
                        <!-- Blog Post Widget -->

                        <div class="blog-post-search-widget mb-30">
                            <form action="http://ma-alijtihad.sch.id/search" method="post">
                                <input type="search" name="cari" id="Search" placeholder="Search">
                                <button type="submit"><i class="fa fa-search" aria-hidden="true">Cari</i></button>
                            </form>
                        </div>

                        <!-- Blog Post Catagories -->
                        <div class="blog-post-categories mb-30">
                          <div class="section-title">
          <h4>Kategori</h4><hr> 
          
        </div>

                       <div class="container" data-aos="fade-up" data-aos-delay="100">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <?php foreach ($kategori as $k) { ?>
              <li data-filter=".filter-<?= $k['kategori'] ?>"><?= $k['kategori'] ?></li>
                          <?php } ?>
            </ul>
                        </div>
</div>
                        <!-- Latest Blog Posts Area -->
                        <div class="latest-blog-posts mb-30">
                          <div class="section-title">
          <h4>Latest Post</h4><hr> 
          
        </div>

                            <div class="container" data-aos="fade-up" data-aos-delay="100">
                                         <?php foreach ($ber as $key => $value) { ?>
                           <!-- Single Latest Blog Post -->
                            <div class="single-latest-blog-post d-flex mb-30">
                                                              <div class="latest-blog-post-thumb">
                                    <img src="<?= base_url('assets/img/info/'.$value->image) ?>" class="img-fluid" alt="">                                </div>
                                <div class="latest-blog-post-content">
                                    <a href="<?= base_url('home/berita_detail/').$value->id_ber; ?>" class="post-title">
                                        <h6><?= $value->jdl ?><br>
                                        <small><?= substr(strip_tags($value->isi),0,40)  ?>...</small></h6>
                                    </a>

                                </div>

                            </div>
                            <hr>

                            <?php } ?>
                          </div></div>
                          

                            <?php 
                                if (isset($paginasi)) {
                                  echo $paginasi;
                                }?>
                              
                          </div></div></div></div></div></div></div>
