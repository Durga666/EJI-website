<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Emerald Jewel Industry India Ltd | Discover</title>
  <?php include('common-header-includes.php'); ?>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <?php 
			include('main-navbar.php');
		?>
    <section class="align-items-center req_cat_banner pt-5">
      <div class="container-fluid">
        <div class="row justify-content-center align-items-center d-flex text-center ">
          <div class="col-12 col-md-8 h-50 pt-5">
            <h1 class="text-light pb-3 pt-5">Contact Us</h1>
            <p class="text-light">Please fill in your information and we'll contact you soon.</p>
          </div>
        </div>
      </div>
    </section>

    <section class="contactus-one pt-5 pb-5" id="contactus">
      <!-- Section id-->
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 d-none d-sm-block">
						<img src="https://pletelyp.sirv.com/img/0023.jpg" alt="contact us" class="img-fluid">
          </div>
          <div class=" col-md-5 col-sm-6">
            <div class="contact-block">
              <div class="dart-headingstyle-one dart-mb-20 pl-3 pr-3">
                <h5 class="dart-heading">Personal Details</h5>
              </div>

              <div class="contact-form pl-3 pr-3">
                <!-- contact form -->
                <form class="" action="send_email.php" id="contact" name="contact" method="post">
									
									<div class="form-group">
										<!-- <label for="name">Name</label> -->
										<input type="text" class="form-control" id="name" placeholder="Full Name">
									</div>
									
									<div class="form-group mb-4">
										<!-- <label for="email">Email address</label> -->
										<input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email">
										<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
									</div>
									
								
									<button type="submit" class="btn btn-rounded btn-primary pl-5 pr-5" >Submit</button>

                </form>
              </div>
							<br /><br />
              <hr>
							<br />
              <div class=" row contact-info">
                
                <div class="col-md-12 col-sm-12">
                  <small class="pt-3">
										You can Call us at: +91 422 4222200</small>
                </div>
                <div class="col-md-12 col-sm-12 ">
                  <small class="pt-3">Not a big talker? Email us at: info@ejindia.com</small>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- Footer -->
    <?php include('footer.php'); ?>
</body>

</html>