<?php include('header.php');   ?>

<br><br><br><br><br>
  <link href="css/lightbox.css" rel="stylesheet">

  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

<link href="https://fonts.googleapis.com/css?family=Alex+Brush&display=swap" rel="stylesheet">

<!-- <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet"> -->

<!-- <link href="https://fonts.googleapis.com/css?family=Allura&display=swap" rel="stylesheet"> -->


<style type="text/css">
/*	.line-height{
		font-family: 'Alex Brush', cursive;
	}
*/
	.line-heights{
		font-family: 'Alex Brush', cursive;

		/*font-family: 'Pacifico', cursive;*/

		/*font-family: 'Allura', cursive;*/


	}

</style>



<div class="col-md-4" >
<div class="line-height" >
	<p class="line-height" style="font-size: 48px;text-align: center;font-family: 'Century Gothic'; font-weight: 100;margin-left: -6%; " >HANDMADE</p>
</div>
</div>

<style type="text/css">
	.imgslider{
		width: 80%;
	}

	.list-group{
		font-family: 'Century Gothic';
		font-weight: 100;
		font-size: 32px;
	}
</style>






<div  class="container-fluid imgslider" > 

<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
 <!--  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol> -->
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="img\BANNERS\Hand made.jpg" style="width: 1440px;height: 450px;"
        alt="Third slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
<!--     <div class="carousel-item">
      <img class="d-block w-100" src="img/dummy-goldtypes.png" style="width: 1440px;height: 450px;"
        alt="Third slide">
    </div> -->
    <!--/Second slide-->
    <!--Third slide-->
<!--     <div class="carousel-item">
      <img class="d-block w-100" src="img/dummy-goldtypes.png" style="width: 1440px;height: 450px;"
        alt="Third slide" >
    </div> -->
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
<!--   <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
  <!--/.Controls-->
</div>
</div>

<br>
<style type="text/css">
	.list-group-item{
	  border: none;
    font-size: 22px;
    font-family: 'QUICKSAND';
    line-height: 1.5em; 
    text-align: justify;

	}
		.lisliders{
		width: 79%;
	}
	.list-group-items{
		
		text-decoration: underline;
		list-style: none;
	}
</style>


<div class="container-fluid lisliders" >
	<ul class="list-group">
	  <li class="list-group-item line-heights">Aesthetically pleasing, inspiring collection of exclusive handmade jewellery by Emerald. This finely crafted, ornate design line of necklaces, chain, studs, bangles; jhumkas etc… Exude the long standing tradition of high standard Indian Goldsmiths.</li>
	</ul>
</div>


	
<br>
<br>

<style type="text/css">
	.products-view{
		width: 73%;
	}
	.products-interior{
			width: 320px;
			height: 200px;
			padding: 0.5%;
			line-height: 40px;
			font-family: '';
	}
  .img-fluid{
        margin-left: 13%;
  }
</style>




<div class="container">
<section class="text-center my-5" style="font-family:'Century Gothic';">

  <!-- Section heading -->
  <h2 class="h1-responsive font-weight-bold text-center my-1">PRODUCTS</h2>
  <!-- Section description -->
  <p class="grey-text text-center w-responsive mx-auto mb-2" style="font-family:'Century Gothic'; font-weight: 100;">We have More than 500000 designs</p>
  
  <!-- Grid row -->
  <div class="row">

    <!-- Grid column -->
    <div class="col-lg-4 col-md-6 mb-lg-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 280px;">
          <img src="img/HANDMADE/CHAIN.jpg" class="img-fluid animated flipInY"
            alt="">
          <div class="stripe dark">
            <a>
              <p>CHAIN
                <i class="fas fa-plus-circle" id="prod_img_1" onclick="show_chain_details()"></i>
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
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 280px;">
          <img src="img/HANDMADE/FANCY.jpg" class="img-fluid animated flipInY"
            alt="">
          <div class="stripe dark">
            <a>
              <p>FANCY
                 <i class="fas fa-plus-circle" id="prod_img_2" onclick="show_fancy_details()"></i>
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
    <div class="col-lg-4 col-md-6 mb-md-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 280px;">
          <img src="img/HANDMADE/JUMKHAS.jpg" class="img-fluid"
            alt="">
          <div class="stripe dark">
            <a>
              <p  >JUMKHAS
                 <i class="fas fa-plus-circle" onclick="show_jumkhas_details()"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
  </div>

    <!-- Grid column -->
    <div class="product-view-div" style="display: none;"></div>
    <div class="product-view-div1" style="display: none;"></div>
     
     <div class="row mt-5 img-row">
    <!-- Fourth column -->
    <div class="col-lg-4 col-md-6">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 280px;">
          <img src="img/HANDMADE/Traditional Collection.jpg" class="img-fluid"
            alt="">
          <div class="stripe dark">
            <a>
              <p>Traditional Collection
                 <i class="fas fa-plus-circle" onclick="show_traditional_details()"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Fourth column -->

  <!-- Grid row -->
  </div>
  <!-- Grid row -->


  <div class="chain-view-div" style="display: none;"></div>
  <div class="fancy-view-div" style="display: none;"></div>
  <div class="jumkhas-view-div" style="display: none;"></div>
  <div class="traditional-view-div" style="display: none;"></div>

  </section>
  <!-- Section: Products v.4 -->
  </div>


  <!-- Chain-Details -->
  <?php 
    $dir = 'images/HANDMADE/CHAIN/LARGE';
    $files1 = scandir($dir);
  ?>
  
  <div class="container mt-1" id="chain-details-gallery" style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
    <div class="row">
      <div class="col-md-12">
       <div class="modal-header" style="background-color: #999999;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
        <button type="button" class="close" onclick="close_chain_details()">
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
            <a href="images/HANDMADE/CHAIN/LARGE/<?php echo $filename; ?>"  data-lightbox="roadtrip" data-title="Braclet">
              <img src="images/HANDMADE/CHAIN/SMALL/<?php echo $filename; ?>" class="" alt="">
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


  <!-- Jumkhas-Details -->
  <?php 
    $dir = 'images/HANDMADE/JUMKHAS/LARGE';
    $files1 = scandir($dir);
  ?>
  
  <div class="container mt-1" id="jumkhas-details-gallery" style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
    <div class="row">
      <div class="col-md-12">
       <div class="modal-header" style="background-color: #999999;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
        <button type="button" class="close" onclick="close_jumkhas_details()">
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
            <a href="images/HANDMADE/JUMKHAS/LARGE/<?php echo $filename; ?>"  data-lightbox="roadtrip" data-title="Braclet">
              <img src="images/HANDMADE/JUMKHAS/SMALL/<?php echo $filename; ?>" class="" alt="">
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


  <!-- Traditional-Details -->
  <?php 
    $dir = 'images/HANDMADE/TRADITIONAL/LARGE';
    $files1 = scandir($dir);
  ?>
  
  <div class="container mt-1" id="traditional-details-gallery" style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
    <div class="row">
      <div class="col-md-12">
       <div class="modal-header" style="background-color: #999999;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
        <button type="button" class="close" onclick="close_traditional_details()">
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
            <a href="images/HANDMADE/TRADITIONAL/LARGE/<?php echo $filename; ?>"  data-lightbox="roadtrip" data-title="Braclet">
              <img src="images/HANDMADE/TRADITIONAL/SMALL/<?php echo $filename; ?>" class="" alt="">
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





	<br><br><br><br><br><br>

  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <script type="text/javascript" src="js/popper.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/lightbox.js"></script>
  <script type="text/javascript" src="js/mdb.min.js"></script>

  <script type="text/javascript">
    new WOW().init();
  </script>



  <script type="text/javascript">
    // Chain-details
    function show_chain_details() {
      $(".chain-view-div").addClass('animated slideInDown');
      $(".chain-view-div").fadeIn(1000);
      $("#chain-details-gallery").css('display','block');
      $(".chain-view-div").html($("#chain-details-gallery")); 
      $(".img-row").hide();
    }

    function close_chain_details() {
      $(".chain-view-div").addClass('animated slideInUp');
      $(".chain-view-div").fadeOut(1000);
      $("#chain-details-gallery").css('display','none');
      $(".img-row").show();
    }

    // Jumkhas-details
    function show_jumkhas_details() {
      $(".jumkhas-view-div").addClass('animated slideInDown');
      $(".jumkhas-view-div").fadeIn(1000);
      $("#jumkhas-details-gallery").css('display','block');
      $(".jumkhas-view-div").html($("#jumkhas-details-gallery")); 
      $(".img-row").hide();
    }

    function close_jumkhas_details() {
      $(".jumkhas-view-div").addClass('animated slideInUp');
      $(".jumkhas-view-div").fadeOut(1000);
      $("#jumkhas-details-gallery").css('display','none');
      $(".img-row").show();
    }

    // Traditional-details
    function show_traditional_details() {
      $(".traditional-view-div").addClass('animated slideInDown');
      $(".traditional-view-div").fadeIn(1000);
      $("#traditional-details-gallery").css('display','block');
      $(".traditional-view-div").html($("#traditional-details-gallery")); 
      $(".img-row").hide();
    }

    function close_traditional_details() {
      $(".traditional-view-div").addClass('animated slideInUp');
      $(".traditional-view-div").fadeOut(1000);
      $("#traditional-details-gallery").css('display','none');
      $(".img-row").show();
    }
  </script>

  <?php include('footer.php');  ?>