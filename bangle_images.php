

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
	<p class="line-height" style="font-size: 48px;text-align: center;font-family: 'Century Gothic'; font-weight: 100;margin-left: -6%; " >CASTING</p>
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










<div class="container mt-1" id="product-details-gallery" style="background-color: #fff; padding:20px 10px 20px 10px;">
  <div class="row">
    <div class="col-md-12">
       <div class="modal-header" style="background-color: #999999;">
        <h5 class="modal-title" id="exampleModalLabel" style="color: #fff;">Images</h5>
        <button type="button" class="close" onclick="close_bangle_details()">
          <span aria-hidden="true">&times;</span>
        </button>
      	<div class="col-lg-12 col-md-12 mb-lg-0 mb-12">
<?php
$imagesDirectory = "img/SAMPLE IMAGES/SMALL";
 
if(is_dir($imagesDirectory))
{
	$opendirectory = opendir($imagesDirectory);
  
    while (($image = readdir($opendirectory)) !== false)
	{
		if(($image == '.') || ($image == '..'))
		{
			continue;
		}
		
		$imgFileType = pathinfo($image,PATHINFO_EXTENSION);
		
		if(($imgFileType == 'jpg') || ($imgFileType == 'png'))
		{
			?>
		
			 <div class="col-lg-3 col-md-6 mb-lg-0 mb-4">
      <!-- Collection card -->
      <div class="card collection-card z-depth-1-half">
        <!-- Card image -->
        <div class="view zoom" style="height: 250px;">
         <a href="img/SAMPLE IMAGES/LARGE/EKTPCS004-21.jpg"  data-lightbox="roadtrip" data-title="Test 1">
         <?php echo "<img src='img/SAMPLE IMAGES/SMALL/".$image."' width='200'> ";?>
          </a>  
          <div class="stripe light">
            <a href="<?php echo "<img src='img/SAMPLE IMAGES/SMALL/".$image."' width='200'> ";?>"   data-lightbox="roadtrip" data-title="Beauty Scenery 1">
                <i class="fas fa-search-plus"></i>
            </a>
          </div>
        </div>
        <!-- Card image -->
      </div>
      <!-- Collection card -->
    </div>

			<?php
		}
    }
	
    closedir($opendirectory);
 
}
?>

</div>

    <!-- Grid column -->
   


  </div>
  <!-- Grid row -->
</div>






















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

