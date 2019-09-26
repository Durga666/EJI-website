<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Emerald Jewel Industry India Ltd | Diamond</title>
  <?php include('common-header-includes.php'); ?>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <?php 
			include('main-navbar.php');
    ?>
    
    <div class="top-short-banner">
        <video class="video-fluid lazyload" autoplay loop muted poster="https://pletelyp.sirv.com/img/banner0.jpg">
          <source src="https://pletelyp.sirv.com/video/diamond-2.mp4" type="video/mp4" />
        </video>
    </div>

    <div class="container pt-5 pb-5">
      <img class="d-block w-100" src="https://pletelyp.sirv.com/img/stones/1050%20x%20354_Diamond.jpg" alt="Third slide">

      <div class="row pt-5">
        <div class="col-12 text-center mt-3">
          <h1>DESIGN YOUR DREAMS</h1>
          <p class="lead pt-3">
            Emerald believes in crafting your product to your hearts content.We take up highest <br> levels of customisation
            to manufacture your dream product, just the way <br>you like it. Dive into our world of co-creation.
          </p>
        </div>

        <div class="col-12 text-center pt-3">
          <a href="request_catalog.php" class="btn btn-lg btn-primary btn-rounded">
            Launch Configurator
          </a>
        </div>
      </div>
    </div>
  
    <div class="container pb-5 mt-3">
      <section class="text-center mt-5">
        <!-- Section heading -->
        <h2>PRODUCTS</h2>
        <!-- Section description -->
        <p class="grey-text text-center lead mb-4">We have More than 500000 designs</p>

        <!-- Grid row -->
        <div class="row">
          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
            <!-- Collection card -->
            <div class="card collection-card z-depth-1-half">
              <!-- Card image -->
              <div class="view zoom" style="height: 280px;">
                <img src="https://pletelyp.sirv.com/img/DIAMOND/MOUNTINGS.jpg" class="img-fluid animated flipInY" alt="">
                <div class="stripe dark">
                  <a>
                    <p>Mountings
                      <i class="fas fa-plus-circle" id="prod_img_1" onclick="show_mountings_details()"></i>
                    </p>
                  </a>
                </div>
              </div>
              <!-- Card image -->
            </div>
            <!-- Collection card -->
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
            <div class="card collection-card z-depth-1-half">
              <div class="view zoom" style="height: 280px;">
                <img src="https://pletelyp.sirv.com/img/DIAMOND/OPEN%20SETTIING.jpg" class="img-fluid animated flipInY" alt="">
                <div class="stripe dark">
                  <a>
                    <p>Open Setting
                      <i class="fas fa-plus-circle" id="prod_img_2" onclick="show_opensetting_details()"></i>
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <!-- Grid column -->

          <div class="col-lg-4 col-md-6">
            <div class="card collection-card z-depth-1-half">
              <div class="view zoom" style="height: 280px;">
                <img src="https://pletelyp.sirv.com/img/DIAMOND/TEMPLE%20NAGAS.jpg" class="img-fluid" alt="">
                <div class="stripe dark">
                  <a>
                    <p>Close Setting
                      <i class="fas fa-plus-circle" onclick="show_closesetting_details()"></i>
                    </p>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div><!-- /row -->
      </section>
      <!-- Section: Products v.4 -->
    </div>


    <!-- Mountings-Details -->
    <?php 
      $dir = 'https://pletelyp.sirv.com/images/DIAMOND/MOUNTINGS/LARGE';
      $files1 = scandir($dir);
    ?>

    <div class="container mt-1" id="mountings-details-gallery"
      style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
      <div class="row">
        <div class="col-md-12">
          <div class="modal-header" style="background-color: #999999;">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
            <button type="button" class="close" onclick="close_mountings_details()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div><!-- /row -->

      <div class="row mt-2">

        <?php $i=1;  foreach($files1 as $filename) {
          if(!empty($filename)){
            if($filename != '.'){
              if($filename != '..'){ if($filename != 'Thumbs.db'){
          if($i <= 22){
        ?>

        <div class="col-lg-3 col-md-6 mt-2">
          <div class="card collection-card z-depth-1-half">
            <div class="view zoom" style="height: 250px;">
              <a href="https://pletelyp.sirv.com/images/DIAMOND/MOUNTINGS/LARGE/<?php echo $filename; ?>" data-lightbox="roadtrip"
                data-title="Braclet">
                <img src="https://pletelyp.sirv.com/images/DIAMOND/MOUNTINGS/SMALL/<?php echo $filename; ?>" class="" alt="">
              </a>
              <div class="stripe light">
                <i class="fas fa-search-plus"></i>
                </a>
              </div>
            </div><!-- Card image -->
          </div><!-- Collection card -->
        </div><!-- Fourth column -->

        <?php }  }  } }  } ?>
        <?php $i++;  } ?>

      </div><!-- /row -->
    </div><!-- /container -->
    <!-- Opensetting-Details -->
    <?php 
    $dir = 'https://pletelyp.sirv.com/images/DIAMOND/OPEN-SETTING/LARGE';
    $files1 = scandir($dir);
  ?>

    <div class="container mt-1" id="opensetting-details-gallery"
      style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
      <div class="row">
        <div class="col-md-12">
          <div class="modal-header" style="background-color: #999999;">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
            <button type="button" class="close" onclick="close_opensetting_details()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div><!-- /row -->

      <div class="row mt-2">

        <?php $i=1;  foreach($files1 as $filename) {
      if(!empty($filename)){
        if($filename != '.'){
          if($filename != '..'){ if($filename != 'Thumbs.db'){

      if($i <= 22){

      ?>

        <div class="col-lg-3 col-md-6 mt-2">
          <div class="card collection-card z-depth-1-half">
            <div class="view zoom" style="height: 250px;">
              <a href="https://pletelyp.sirv.com/images/DIAMOND/OPEN-SETTING/LARGE/<?php echo $filename; ?>" data-lightbox="roadtrip"
                data-title="Braclet">
                <img src="https://pletelyp.sirv.com/images/DIAMOND/OPEN-SETTING/SMALL/<?php echo $filename; ?>" class="" alt="">
              </a>
              <div class="stripe light">
                <i class="fas fa-search-plus"></i>
                </a>
              </div>
            </div><!-- Card image -->
          </div><!-- Collection card -->
        </div><!-- Fourth column -->

        <?php }  }  } }  } ?>
        <?php $i++;  } ?>

      </div><!-- /row -->
    </div><!-- /container -->


    <!-- Closesetting-Details -->
    <?php 
    $dir = 'https://pletelyp.sirv.com/images/DIAMOND/CLOSE-SETTING/LARGE';
    $files1 = scandir($dir);
  ?>

    <div class="container mt-1" id="closesetting-details-gallery"
      style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
      <div class="row">
        <div class="col-md-12">
          <div class="modal-header" style="background-color: #999999;">
            <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
            <button type="button" class="close" onclick="close_closesetting_details()">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
        </div>
      </div><!-- /row -->

      <div class="row mt-2">

        <?php $i=1;  foreach($files1 as $filename) {
      if(!empty($filename)){
        if($filename != '.'){
          if($filename != '..'){ if($filename != 'Thumbs.db'){

      if($i <= 22){

      ?>

        <div class="col-lg-3 col-md-6 mt-2">
          <div class="card collection-card z-depth-1-half">
            <div class="view zoom" style="height: 250px;">
              <a href="https://pletelyp.sirv.com/images/DIAMOND/CLOSE-SETTING/LARGE/<?php echo $filename; ?>" data-lightbox="roadtrip"
                data-title="Braclet">
                <img src="https://pletelyp.sirv.com/images/DIAMOND/CLOSE-SETTING/SMALL/<?php echo $filename; ?>" class="" alt="">
              </a>
              <div class="stripe light">
                <i class="fas fa-search-plus"></i>
                </a>
              </div>
            </div><!-- Card image -->
          </div><!-- Collection card -->
        </div><!-- Fourth column -->

        <?php }  }  } }  } ?>
        <?php $i++;  } ?>

      </div><!-- /row -->
    </div><!-- /container -->

    <script type="text/javascript" src="js/lightbox.js"></script>

    <script type="text/javascript">
      // Jumkhas-details
      function show_mountings_details() {
        $(".mountings-view-div").addClass('animated slideInDown');
        $(".mountings-view-div").fadeIn(1000);
        $("#mountings-details-gallery").css('display', 'block');
        $(".mountings-view-div").html($("#mountings-details-gallery"));
        $(".img-row").hide();
      }

      function close_mountings_details() {
        $(".mountings-view-div").addClass('animated slideInUp');
        $(".mountings-view-div").fadeOut(1000);
        $("#mountings-details-gallery").css('display', 'none');
        $(".img-row").show();
      }

      // Opensetting-details
      function show_opensetting_details() {
        $(".opensetting-view-div").addClass('animated slideInDown');
        $(".opensetting-view-div").fadeIn(1000);
        $("#opensetting-details-gallery").css('display', 'block');
        $(".opensetting-view-div").html($("#opensetting-details-gallery"));
        $(".img-row").hide();
      }

      function close_opensetting_details() {
        $(".opensetting-view-div").addClass('animated slideInUp');
        $(".opensetting-view-div").fadeOut(1000);
        $("#opensetting-details-gallery").css('display', 'none');
        $(".img-row").show();
      }

      // Closesetting-details
      function show_closesetting_details() {
        $(".closesetting-view-div").addClass('animated slideInDown');
        $(".closesetting-view-div").fadeIn(1000);
        $("#closesetting-details-gallery").css('display', 'block');
        $(".closesetting-view-div").html($("#closesetting-details-gallery"));
        $(".img-row").hide();
      }

      function close_closesetting_details() {
        $(".closesetting-view-div").addClass('animated slideInUp');
        $(".closesetting-view-div").fadeOut(1000);
        $("#closesetting-details-gallery").css('display', 'none');
        $(".img-row").show();
      }
    </script>

 <!-- Footer -->
      <?php include('footer.php'); ?>
      
    </body>

</html>