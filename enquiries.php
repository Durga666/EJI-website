<?php  include('header.php');  ?>



<script type="text/javascript">
  // $(document).ready(function() {
    // $(".scroll").click(function(event){
        // $('html, body').animate({scrollTop: '+=896%'}, 0);
    // });
// });



  // scroll id sectionscroll
</script>

<style type="text/css">


.demo a {
  position: absolute;
  bottom: 20px;
  left: 50%;
  z-index: 2;
  display: inline-block;
  -webkit-transform: translate(0, -50%);
  transform: translate(0, -50%);
  color: #fff;
  font : normal 400 20px/1 'Josefin Sans', sans-serif;
  letter-spacing: .1em;
  text-decoration: none;
  transition: opacity .3s;
}
.demo a:hover {
  opacity: 1;
}


#section05 a {
  padding-top: 70px;
}
#section05 a span {
  position: absolute;
  top: 0;
  left: 50%;
  width: 24px;
  height: 24px;
  margin-left: -12px;
  border-left: 1px solid #fff;
  border-bottom: 1px solid #fff;
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
  -webkit-animation: sdb05 1.5s infinite;
  animation: sdb05 1.5s infinite;
  box-sizing: border-box;
}
@-webkit-keyframes sdb05 {
  0% {
    -webkit-transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    -webkit-transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}
@keyframes sdb05 {
  0% {
    transform: rotate(-45deg) translate(0, 0);
    opacity: 0;
  }
  50% {
    opacity: 1;
  }
  100% {
    transform: rotate(-45deg) translate(-20px, 20px);
    opacity: 0;
  }
}

  .tf-header1 {
    position: relative;
    /*background: url(images/stamp_05.jpeg) no-repeat center center;*/
    background-size: cover;
    background-attachment: fixed;
    height: 100%;
    color: rgba(255, 255, 255, 0.98);
}

  .tf-header1::before {
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    width: 100%;
    height: 100%;
    content: ' ';
}
.centered-text{
  text-align: center;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  color: white;
  font-family: Quicksand,sans-serif;
  font-size: 30px;
  font-weight: 10;
  line-height: normal;

}
</style>



  <!--Carousel Wrapper-->
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item  tf-header1 active" style="background: url(img/careers.jpg) no-repeat center center;" >
      <!-- <img class="d-block w-100" src="img/careers.jpg" 
        alt="First slide"> -->
<section class="page_banner centered-text">
  <div class="container">
    <h1 class="animated fadeInDown">ENQUIRIES</h1>&emsp;
    <p class="desc animated fadeInUp mb0">Please note that we cannot answer enquiries over the <br>weekend, as the Chevening Secretariat operates from 09:00 to 17:00 (India time), Monday to Friday. <br><b><a class="mail"  style="color: white;" href="mailto:enquiries@ejindia.com">enquiries@ejindia.com</a></b></p>
  </div> <!--container-->
</section>


        <!-- <p class="centered-text" >Carrers</p> -->
    </div>
<!--  second image    <div class="carousel-item">
      <img class="d-block w-100"  src="https://mdbootstrap.com/img/Photos/Slides/img%20(16).jpg"
        alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(17).jpg"
        alt="Third slide">
    </div> -->
  </div>
<!-- 
    previous next icon
   <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a> -->
</div>
<div id="sectionscroll"></div>

<style type="text/css">
  .currentopenings{
    text-align: center;
    letter-spacing: .04em;
    line-height: 42px;
    font-size: 36px;
    margin: 0 0 15px;
    font-weight: 400;
    font-family: Quicksand,sans-serif;
  }
</style>

<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">

<br><br><br><br>
<br>

<style type="text/css">


 .card-title {
    font-family: Quicksand,sans-serif;
}


.displayinline{
  vertical-align: top;
  padding-left: 2%;
  font-size: 22px;
}
.iconss{
  background-color: rgba(5,165,209,.18);
  color: rgb(5, 164, 209); 
  border-radius: 5px;
  font-size: 57px;
}
.padding-lefs{
  padding-left: 2%;
}


</style>

  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

<style type="text/css">


.font-text{
      font-family: Quicksand,sans-serif;
}

ul.reset {
  margin: 0;
  padding: 0;
  list-style: none;
  margin-bottom: 5px;
  float: left;
  width: 100%;
}
ul.reset li {
    float: left;
    width: 100%;
    position: relative;
    padding-left: 45px;
    margin-bottom: 18px;
    font-family: Quicksand,sans-serif;

}
ul.reset li:before {
    content: "\f00c";
    font-family: FontAwesome;
    position: absolute;
    left: 15px;
    width: 18px;
    height: 18px;
    text-align: center;
    line-height: 18px;
    background: #4cb849;
    border-radius: 100px;
    font-size: 9px;
    color: #fff;

}

.heading {
    cursor: pointer;
    border: 0;
    outline: 0;
    position: relative;
    background: 0 0;
}

.heading:after {
    content: "\f107";
    font-family: FontAwesome;
    position: absolute;
    width: 30px;
    height: 30px;
    text-align: center;
    line-height: 30px;
    right: 20px;
    top: 50%;
    margin-top: -15px;
    background: #d9dadb;
    border-radius: 100px;
    font-size: 18px;
    color: #666;
}

 .underline:after {
    content: "";
    position: absolute;
    left: 0;
    bottom: 0;
    width: 35px;
    height: 2px;
    background: #4cb849;
    border-radius: 10px;
}
.underline{
    font-size: 20px;
    font-weight: 500;
    letter-spacing: .02em;
    position: relative;
    padding-bottom: 10px;
    margin-bottom: 20px;
}



 .btn.green {
    margin-left: 15px;
}
.btn.green {
    margin-left: 45px;
    min-width: 155px;
}

.btn.green {
    background: #4CB849;
    color: #fff;
}
.btn.green{
    display: inline-block;
    background: #2B64E9;
    min-width: 100px;
    color: #fff;
    border-radius: 4px;
    text-transform: uppercase;
    margin-left: 15px;
}
.btn.green:hover{
    background: #2B64E9;
    color: #fff;
    box-shadow: 0 0 0 4px rgba(43,100,233,.3);
    -webkit-box-shadow: 0 0 0 5px rgba(43,100,233,.3);
}


.btn.apply:hover {
    background: #194BBD;
    color: #fff;
    box-shadow: 0 0 0 4px rgba(43,100,233,.3);
    -webkit-box-shadow: 0 0 0 5px rgba(43,100,233,.3);
}
.btn.apply{
      display: inline-block;
    background: #2B64E9;
    min-width: 100px;
    color: #fff;
    border-radius: 4px;
    text-transform: uppercase;
}
</style>

<div class="container">
  <div class="row">
    <div class="col">

          <div class="card" >
          <div class="card-body">
           
            <section class="mb-4">

    <!--Section heading-->
    <h2 class="h1-responsive text-center my-4 currentopenings">Enquiries</h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5 font-text">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>

    <div class="row">

        <!--Grid column-->
        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="name" name="name" class="form-control">
                            <label for="name" class="">Your name</label>
                        </div>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">
                        <div class="md-form mb-0">
                            <input type="text" id="email" name="email" class="form-control">
                            <label for="email" class="">Your email</label>
                        </div>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="md-form mb-0">
                            <input type="text" id="subject" name="subject" class="form-control">
                            <label for="subject" class="">Subject</label>
                        </div>
                    </div>
                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-12">

                        <div class="md-form">
                            <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                            <label for="message">Your message</label>
                        </div>

                    </div>
                </div>
                <!--Grid row-->

            </form>

            <div class="text-center text-md-left">
                <a class="btn btn-primary" onclick="document.getElementById('contact-form').submit();">Send</a>
            </div>
            <div class="status"></div>
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-3 text-center">
            <ul class="list-unstyled mb-0">
                <li><i class="fas fa-map-marker-alt fa-2x"></i>
                    <p>Emerald Jewel Industry India Pvt Limited</p>
                </li>

                <li><i class="fas fa-phone mt-4 fa-2x"></i>
                    <p>+ 01 234 567 89</p>
                </li>

                <li><i class="fas fa-envelope mt-4 fa-2x"></i>
                    <p>enquires@ejinda.com</p>
                </li>
            </ul>
        </div>
        <!--Grid column-->

    </div>

</section>

          

          <br>
          </span>
          </div>
          </div>
         </div>
        </div>
</div>
</div>
</div>


<br>


<style type="text/css">
  

.modal-dialog .modal-content {
      border-radius: 10px;
}
</style>

<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" >
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                              <h4>Apply Now</h4> <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button>
                               <!--  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                            <span aria-hidden="true">×</span>
                                                        </button> -->
                                <!-- <h4 class="modal-title" id="exampleModalLabel">New message to @mdo</h4> -->
                            </div>
                            <div class="modal-body">
                                <form>
                                    <div class="md-form">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Name">
                                    </div>
                                     <div class="md-form">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Experience">
                                    </div>
                                     <div class="md-form">
                                        <input type="text" class="form-control" id="recipient-name" placeholder="Expected Salary">
                                    </div>

                                <button type="button" class="btn green" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn apply" >Send Resume</button>
                                    
                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>



  <!--Main layout-->
  
   <!-- Footer -->



  

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
</body>

</html>

<script type="text/javascript" src="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.js" ></script>


<style type="text/css">
  html{
    scroll-behavior: smooth;
  }
</style>






