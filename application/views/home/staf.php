 

    <!-- ======= About Us Section ======= -->
  

    <!-- ======= Our Team Section ======= -->
    <div class="team">
      <div class="container">

  
        <div class="section-title">
          <h2>GURU</h2><hr>
          
        </div>

        <div class="row">
<?php foreach ($staf as $key => $value) {?>
          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">

              <div class="pic"><img src="<?= base_url('assets/img/guru/') ?>" class="img-fluid " alt="" style="max-width:100%; max-height: 100%; height: 280px; width: 300px"></div>
              <div class="member-info">
                <h4><?= 
        $value['nama'] 
    ?><br>
       </h4><span>(<?= 
        $value['jabatan'] 
    ?>)</span>

               <!-- <span><?= 
        $value->ajar 
    ?></span-->
                <div class="social">
                  <a href=""><i class="icofont-twitter"></i></a>
                  <a href=""><i class="icofont-facebook"></i></a>
                  <a href=""><i class="icofont-instagram"></i></a>
                  <a href=""><i class="icofont-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        <?php } ?>
      </div>
    </div></div>
    <!-- End Our Team Section -->

   

        

