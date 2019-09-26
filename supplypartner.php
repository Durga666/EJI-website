<?php include('header.php');  ?>



<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
new WOW().init();
</script>


<br>
<br><br>
<br><br>

<div class="container-fluid"  >

<nav  style="" >
  <div class="nav nav-tabs md-tabs" id="nav-tab" role="tablist" style="padding-left: 36%;"   >

  	    <a class="nav-item nav-link active" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
      aria-controls="nav-profile" aria-selected="false" style="font-family: 'Century Gothic';font-weight: 100;" >Become Our Dealer</a>

    <a class="nav-item nav-link " id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab"
      aria-controls="nav-home" aria-selected="true" style="font-family: 'Century Gothic';font-weight: 100;"  >Become Our Supply Partner</a>

 <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab"
      aria-controls="nav-contact" aria-selected="false" style="font-family: 'Century Gothic';font-weight: 100;" >Corporate Gifting</a>



     </div>
</nav>
<div class="tab-content pt-5" id="nav-tabContent">
  <div class="tab-pane fade " id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

<style type="text/css">
	.textfont{
		font-family: 'Century Gothic';
	}
</style>



		<section class="form-elegant">
  <div class="container" >
<!--Form without header-->
<div class="card"  >

	<form  action="" method="" >

    <div class="card-body mx-4"   >

        <!--Header-->
        <div class="text-center ">
            <h3 class="dark-grey-text mb-5" style="font-family: 'Century Gothic';font-weight: 100;" ><strong>Supply Partner</strong></h3>
        </div>

        <!--Body-->
        <div class="md-form textfont">
            <input type="text" id="Form-email1" class="form-control">
            <label for="Form-email1 ">Name</label>
        </div>

          <div class="md-form textfont">
            <input type="text" id="Form-email1" class="form-control">
            <label for="Form-email1 ">Name of Oranganization</label>
        </div>

        <div class="md-form  textfont">
           	<input type="text" id="Form-email1" class="form-control">
           	 <label for="form7">Address</label>
        </div>
        <div class="md-form textfont">
           	<input type="text" id="Form-email1" class="form-control">
           	 <label for="form7">Contact Number</label>
        </div>

        <div class="md-form textfont">
			<input type="text" id="Form-email1" class="form-control"  style="visibility: hidden;" >
			<label for="form7">Are You a</label>

			  &emsp;<input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios"> Dealer
			  &emsp;&emsp;<input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios"> Service Provider
			   &emsp;&emsp;<input type="radio" class="form-check-input" id="materialGroupExample1" name="groupOfMaterialRadios"> manufacturer
        </div>


		<div class="md-form textfont">
			<input type="text" id="Form-email1" class="form-control">
			<label for="form7">Category</label>
		</div>


		<div class="md-form textfont">
		
<div class="input-group">
<!--   <div class="input-group-prepend">
    <span class="input-group-text" id="inputGroupFileAddon01">Upload</span>
  </div> -->
  <div class="custom-file">
    <input type="file" class="custom-file-input" id="inputGroupFile01"
      aria-describedby="inputGroupFileAddon01">
    <label class="custom-file-label" for="inputGroupFile01">Upload Your Samples</label>
  </div>
</div>

		</div>

		<br><br>



        <div class="text-center mb-3">
				<button type="button" class="btn btn-default btn-rounded waves-effect waves-light" style="border-radius: 1.99rem;"  >Submit Supply Partner</button>
        </div>
     
    </div>

    </form>

    <!--Footer-->
  <!--   <div class="modal-footer mx-5 pt-3 mb-1">
        <p class="font-small grey-text d-flex justify-content-end">Not a member? <a href="#" class="blue-text ml-1"> Sign Up</a></p>
    </div> -->

</div>

</div>


<!--/Form without header-->

</section>



  </div>
  <div class="tab-pane fade show active" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    	

<!-- second form start -->
  <div class="container" >
<div class="card"  >

	<form  action="" method="" >

    <div class="card-body mx-4"   >

        <!--Header-->
        <div class="text-center ">
            <h3 class="dark-grey-text mb-5" style="font-family: 'Century Gothic';font-weight: 100;" ><strong>Dealer</strong></h3>
        </div>

        <!--Body-->
        <div class="md-form textfont">
            <input type="text" id="Form-email1" class="form-control">
            <label for="Form-email1 ">Name</label>
        </div>

          <div class="md-form textfont">
            <input type="text" id="Form-email1" class="form-control">
            <label for="Form-email1 ">Name of Oranganization</label>
        </div>

        <div class="md-form textfont">
           	<input type="text" id="Form-email1" class="form-control">
           	 <label for="form7">Contact Number</label>
        </div>

        <div class="md-form textfont">
           	<input type="text" id="Form-email1" class="form-control">
           	 <label for="form7">City</label>
        </div>


		<div class="md-form textfont">
			<input type="text" id="Form-email1" class="form-control">
			<label for="form7">State</label>
		</div>


		<div class="md-form textfont">
			<input type="text" id="Form-email1" class="form-control">
			<label for="form7">Email us @ for enquiries contact</label>
		</div>

		<br><br>



        <div class="text-center mb-3">
				<button type="button" class="btn btn-default btn-rounded waves-effect waves-light" style="border-radius: 1.99rem;"  >Submit Dealer</button>
        </div>
     
    </div>

    </form>

</div>
</div>



</div>
<!-- second form end -->


<div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
    
<style type="text/css">
  .get_to_touch{
    width: 80%;
  }
  .imageslider{
      width: 80%;
    }
</style>


<div class="container-fluid imageslider" >

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
      <img class="d-block w-100" src="img/dummy-goldtypes.png" style="width: 1440px;height: 450px;"
        alt="Third slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/dummy-goldtypes.png" style="width: 1440px;height: 450px;"
        alt="Third slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="img/dummy-goldtypes.png" style="width: 1440px;height: 450px;"
        alt="Third slide" >
    </div>
    <!--/Third slide-->
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
</div>

<br><br>


  <div class="container-fluid get_to_touch"   >
			<div class="card"  >
        <div class="col-mx-12">
        <div class="col-mx-1">
        <img src="img/Gold.jpg">
      </div>
       <div class="col-mx-1">
        <img src="img/Silver.jpg">

      </div>
    </div>

<!--       <form>
      <select class="mdb-select md-form">
      <option value="" disabled selected>Choose your option</option>
      <option value="1">Option 1</option>
      <option value="2">Option 2</option>
      <option value="3">Option 3</option>
      </select>
      </form>  
 -->





			</div>
</div>









</div>
</div>
</div>





<!-- <div class="card">
    <div class="card-block">

        <div class="text-center">
            <h3><i class="fa fa-lock"></i> Login:</h3>
            <hr class="mt-2 mb-2">
        </div>

        <div class="md-form">
            <i class="fa fa-envelope prefix"></i>
            <input type="text" id="form2" class="form-control">
            <label for="form2">Your email</label>
        </div>

        <div class="md-form">
            <i class="fa fa-lock prefix"></i>
            <input type="password" id="form4" class="form-control">
            <label for="form4">Your password</label>
        </div>

        <div class="text-center">
            <button class="btn btn-deep-purple">Login</button>
        </div>

    </div>

    <div class="modal-footer">
        <div class="options">
            <p>Not a member? <a href="#">Sign Up</a></p>
            <p>Forgot <a href="#">Password?</a></p>
        </div>
    </div>

</div>
 -->
