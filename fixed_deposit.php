

<?php  include('header.php'); ?>

<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
new WOW().init();
</script>




<br><br><br>
<br><br><br>



<div class="container" >

<div class="card-deck">
  <div class="card mb-3">
    <div class="card-body">
      <h4 class="card-title" style="    font-family: 'Century Gothic';text-decoration: underline;text-align: center; " >DOWNLOAD FIXED DEPOSIT FORMS
</h4>
      <br>
      <div class="col-md-12" >

		<ul class="list-group">
		<li class="list-group-item list-group-item-action active  extraforms">Download Forms</li>
		<span  class="extraform" style="display: none;cursor: pointer;" >
		<li class="list-group-item"> DPT-1(Circular in the form of Advertisement) in English Newspaper-Business Line Dated 11.06.2019</li>
		<li class="list-group-item"> DPT-1(Circular in the form of Advertisement) in Tamil Newspaper-Malai Malar Dated 11.06.2019</li>
		<li class="list-group-item"> Deposit Application Form</li>
		<li class="list-group-item"> Deposit Nomination Form</li>
		<li class="list-group-item">  Form 15 G</li>
		<li class="list-group-item"> Deposit Nomination Form</li>
		</span>
		</ul>

<br>
<div class="col-md-12" >
<div class="row" >

<div class="col-md-3" >
<div class="md-form captchacode">
  <input type="text" id="form1" class="form-control"  >
  <label for="form1">Captcha Code</label>
</div>
</div>
	
<div class="col-md-3 captchacode" style="padding: 1%;" > 	
	<input type="button" class="btn btn-default" value="Submit Captcha" style="border-radius: 24px;" >
</div>

</div>
</div>



	  </div>
    </div>	
  </div>
</div>

</div>


<script type="text/javascript">
	
	$(document).ready(function(){

		$(".extraforms").click(function(){

			$(".extraform").slideDown();

			$(".extraforms").slideUp();

			$(".captchacode").slideUp();

		});

	});
</script>






