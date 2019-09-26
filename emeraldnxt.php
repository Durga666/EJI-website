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
	<p class="line-height" style="font-size: 48px;text-align: center;font-family: 'Century Gothic'; font-weight: 100;margin-left: 30%; " >EMERALD NXT</p>
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
      <img class="d-block w-100" src="img/Banners/NXT.jpg" style="width: 1440px;height: 450px;"
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
	  <li class="list-group-item line-heights">An exclusive collection finely crafted for the trend setters. Winsome, opulent designer rings, studs, bracelets, pendants and chain sets, explicitly carved by imparting the most modern technology and techniques. Inspiring, impressive designs and chic make give an exotic appeal to Emerald NXT collection. State of the art technology and craftsmanship of Emerald at its best. </li>
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
    <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 250px;">
          <img src="img/electrofusion/HALF SET.jpg" class="img-fluid animated flipInY"
            alt="">
          <div class="stripe dark">
            <a>
              <p>Emerald NXT
                <i class="fas fa-plus-circle" id="prod_img_1" onclick="show_product_details()"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
    <!-- Grid column -->





  </div>
  <!-- Grid row -->
  <div class="product-view-div" style="display: none;">
  </div> 
<!--    <div class="row mt-5 img-row">

  NEXT ROW

  </div> -->
  <!-- Grid row -->

<!--    <div class="row mt-5 img-row">

  NEXT ROW

  </div> -->
  <!-- Grid row -->

</section>
<!-- Section: Products v.4 -->

</div>






<?php 

 $dir    = 'images/EMERALDNXTSUB/LARGE';
 $dir1    = 'images/EMERALDNXTSUB/SMALL';
       $files2 = scandir($dir);
// print_r($files1);

          ?>
<!-- fully div -->
<div class="container mt-1" id="product-details-gallery" style="display: none; background-color: #fff; padding:20px 10px 20px 10px;">
  <div class="row">
    <div class="col-md-12">
       <div class="modal-header" style="background-color: #999999;">
        <h5 class="modal-title" id="exampleModalLabel1" style="color: #fff;">IMAGES</h5>
        <button type="button" class="close" onclick="close_tennis()">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
    </div>
     <!-- Grid column -->
<?php  foreach($files2 as $filename2) {
if(!empty($filename2)){
  if($filename2 != '.'){
    if($filename2 != '..'){ if($filename2 != 'Thumbs.db'){
     ?>
    <div class="col-lg-4 col-md-6 mb-lg-0 mb-4 mt-2">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
         <div class="view zoom" style="height: 250px;">
         <a    href="<?php echo $dir; ?>/<?php echo $filename2; ?>"  data-lightbox="roadtrip" data-title="<?php echo $filename2; ?>">
          <img src="<?php echo $dir1; ?>/<?php echo $filename2; ?>" class="img-fluid" alt="" >
          </a>  
          <div class="stripe dark">
            <!-- <a href="images/DIVIJASUB/TEMPLE/LARGE/<?php //echo $filename; ?>"  data-lightbox="roadtrip" data-title="Beauty Scenery 1"> -->
              <p>
                <i class="fas fa-search-plus"></i>
              </p>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>
  <?php }  } }  } ?>
  <?php } ?>
    <!-- Grid column -->
  </div>
  <!-- Grid row -->
</div>
<!-- fully div  -->






<!-- <div class="container-fluid products-view" >
<div id="login" class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

	<img src="img/products.png" class="products-interior"  > 
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >

	<img src="img/products.png" class="products-interior"  > 
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >

	<img src="img/products.png" class="products-interior"  > 
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >
	<img src="img/products.png" class="products-interior" >


</div>
</div> -->


	
<br>
<br>	
<br>
<br>	
<br>
<br>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
new WOW().init();
</script>

  <script type="text/javascript" src="js/lightbox.js"></script>


  <script type="text/javascript">
    function show_product_details()
    {
      //  $("#prod_img_1").css('display','block');
      $(".product-view-div").addClass('animated slideInDown');
      $(".product-view-div").fadeIn(1000);
      $("#product-details-gallery").css('display','block');
      $(".product-view-div").html($("#product-details-gallery")); 
      $(".img-row").hide();
      //  $("#product-view-div").html('welcome'); 

      //alert(123);
    }

    function close_product_details()
    {
      //  $("#prod_img_1").css('display','block');
      $(".product-view-div").addClass('animated slideInUp');
      $(".product-view-div").fadeOut(1000);
      $("#product-details-gallery").css('display','none');
      $(".img-row").show();
      //  $("#product-view-div").html('welcome'); 

      //alert(123);
    }

   
</script>