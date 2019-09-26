<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Emerald Jewel Industry India Ltd | Investors</title>
  <?php include('common-header-includes.php'); ?>
</head>

<body>
  <!--Main Navigation-->
  <header>
    <?php 
			include('main-navbar.php');
    ?>
  </header>

  <section class="align-items-center d-flex banner-investor lazyload">
    <div class="container-fluid">
      <div class="row justify-content-center align-items-center d-flex text-center h-100">
        <div class="col-12 col-md-8 h-50 pt-5">
          <h1 class="text-light pb-3 pt-5">Investors</h1>
        </div>
      </div>
    </div>
  </section>

  <section class="container pt-5 pb-5">
    <div class="col-md-12">
      <div class="row">
        <div class="col-md-6 pb-3">
          <div class="list-group">
            <a href="javascript:void(0);"
              class="list-group-item list-group-item-action policies-head values policiesaddclas h5">
              Policies
            </a>
            <span class="policies-hide" style="display: none;">
              <a href="request_catalog.php"
                class="list-group-item list-group-item-action values  policies-head">Corporate Social
                Responsibility policy</a>
              <a href="request_catalog.php"
                class="list-group-item list-group-item-action values  policies-head">Whistle Blower Policies</a>
              <a href="request_catalog.php"
                class="list-group-item list-group-item-action values  policies-head">Nomination & Enumeration
                Policies</a>
            </span>
          </div>

        </div>

        <div class="col-md-6 pb-3	">

          <div class="list-group">
            <a href="javascript:void(0);" class="list-group-item list-group-item-action lists policies-head1 h5">
              Directors Letter of Appointment
            </a>
            <span class="policies-hide1" style="display: none;">
              <a href="cert/Appointment_Letter_CRN _EJIIL.pdf" target="_blank"
                class="list-group-item list-group-item-action values  policies-head">Appointment Letter CRN -
                EJIIL</a>
              <a href="cert/Appointment Letter RV- EJIIL.pdf" target="_blank"
                class="list-group-item list-group-item-action values  policies-head">Appointment Letter RV-
                EJIIL</a>

            </span>
          </div>
        </div>
      </div>
    </div>

  </section>

  <style type="text/css">
		.policies-head:hover {
			color: #fff;
			background-color: #007bff
		}

		.lists:hover {
			color: #fff;
			background-color: #007bff
		}
  </style>


 
	 <!-- Footer -->
			<?php include('footer.php'); ?>
			 <script type="text/javascript">
					$(document).ready(function() {
						$(".policies-head").mouseover(function() {
							$(".textss").css("top", "30%");
							$(".policies-hide").slideDown();
						});
						$(".policies-head1").mouseover(function() {
							$(".textss").css("top", "30%");
							$(".policies-hide1").slideDown();
						});

					});
				</script>
    </body>

</html>