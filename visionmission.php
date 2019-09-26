 <link href="css/navigation.css" rel="stylesheet">
 <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
    <style type="text/css">
        p
        {
        text-align : justify; 
        font-family: 'Open Sans', sans-serif;
         font-size: 20px!important;
          line-height:2em!important;
          font-weight: 100!important;


        }
        .fa, .fab, .fal, .far, .fas {
  
     display: contents!important;
  
}
/* .navbar {
    background-color: #264d6a !important;
}*/
    </style>
    <?php include('header_final1.php');?>

  <section style="margin-top: 190px;">
    
  <?php include('nav.php');?>  

        <div class="container" >
          <h3 style="font-family: Yu Gothic Light!important;  font-weight: 100!important; font-size: 50px!important; color: #284d6a!important; text-align: center;">VISION</h3><br>
          <div style="margin-top: 50px"></div>
         <!--  <div class="clearfix"></div><br>
           <?php// include('vision.php');?>
        </div> -->
            <div id="__next">
        <main class="">
           
            <div class="corporate">
                <div class="lg--container">
                    <div class="lg--row">
                        <div class="post">
                            <div class="lg--row">
                                <div class="banner"><img src="img/vision/heritage 1.jpg" alt="azienda_cover_01" /></div>
                            </div>
                            <br>
                            <div class="lg--row">
                                <div class="description">
                                    <div style="margin-top: 50px"></div>
                                    <p style="margin-left: 150px;">"Emerald aims to be the world’s largest jewelry manufacturer and timeless jewelry creator, delivering innovative </p><br><p style="text-align: center; margin-top: -40px;">designs of the finest quality to every one of our customer’s delight" </p>
                                </div>
                            </div>
                        </div>
                      
                   </div>
                </div>
            </div>
        </main>
    </div>
    </section>
    <div style="margin-top: 50px"></div>
    <br>
    <hr>
      <section style="margin-top: 100px;">

        <div class="container">
          <h3 style="font-family: Yu Gothic Light!important;  font-weight: 100!important; font-size: 50px!important; color: #284d6a!important; text-align: center;">MISSION</h3>
          <br>
          <div style="margin-top: 60px"></div>
         <!--  <div class="clearfix"></div><br>
           <?php// include('vision.php');?>
        </div> -->
            <div id="__next">
        <main class="">
           
            <div class="corporate">
                <div class="lg--container">
                    <div class="lg--row">
                        <div class="post">
                            <div class="lg--row">
                                <div class="banner"><img src="img/vision/heritage 2.jpg" alt="azienda_cover_01" /></div>
                            </div>
                            <br>
                            <div class="lg--row">
                                <div class="description">
                                    <div style="margin-top: 50px"></div>

                                    <p style="text-align: center;">"Emerald Will achieve the world’s largest jewelry manufacturer status through state of the art infrastructure, product  </p><br>
                                    <p style="text-align: center;margin-top: -40px;">research & development, dedicated team involvement, lean management practices, ethical business approach, better  </p><br>
                                <p style="margin-top: -40px; text-align: center;">value for money, customer focus, continuous improvement of processes and the products to penetrate into newer markets".   </p>
                                </div>
                            </div>
                        </div>
                      
                   </div>
                </div>
            </div>
        </main>
    </div>
    </section>
    <div style="margin-top: 50px"></div>
    <br>
    <hr>

          <section style="margin-top: 100px;">

        <div class="container">
          <h3 style="font-family: Yu Gothic Light!important;  font-weight: 100!important; font-size: 50px!important; color: #284d6a!important; text-align: center;">QUALITY POLICY</h3>
          <div style="margin-top: 70px"></div>
          <br>
         <!--  <div class="clearfix"></div><br>
           <?php// include('vision.php');?>
        </div> -->
            <div id="__next">
        <main class="">
           
            <div class="corporate">
                <div class="lg--container">
                    <div class="lg--row">
                        <div class="post">
                            <div class="lg--row">
                                <div class="banner"><img src="img/vision/quality.jpg" alt="azienda_cover_01" /></div>
                            </div>
                            <br>
                            <div class="lg--row">
                                <div class="description">
                                    <div style="margin-top: 50px"></div>
                                    <p style="margin-left:80px!important">"We at Emerald committed to ensures quality in our jewelry by building systems and procedures at all stages in order </p>
                                    <p style="margin-top: -20px; text-align: center; margin-left: -10px;"> to enhance Customer Satisfaction and make them delight. We review, measure and continually improve through</p> <p style="margin-top: -20px; text-align: center;">product,process, quality and system objectives related to our business in order to be pioneer in the global market".
                                    </p>
                                </div>
                            </div>
                        </div>
                      
                   </div>
                </div>
            </div>
            <br><br><br>
        </main>
         </div>
    </section>

    <?php include('footer_final1.php');?>
        
    <script type="text/javascript" src="js/popper.min.js"></script>

    <script type="text/javascript" src="js/mdb.min.js"></script>

   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<script type="text/javascript">
  var nav = document.getElementById("topNav");
var main = document.getElementById("main");
var menu = document.getElementsByClassName("menuitems");
var close = document.getElementById("closebtn");

//default to measure if/else from
nav.style.height = "50px";
main.style.marginTop = "50px";
for (i = 0; i < menu.length; i++){menu[i].style.marginTop="100px";};

close.addEventListener("click", function(){
  var menuIcon = close.children;
  for (i = 0; i < menuIcon.length; i++){
  menuIcon[i].classList.toggle("active");
  }   
});

function navToggle() {  
  //to close
  if (nav.style.height <= "450px") {

     $(".navigation").css("width","4%");
      $(".navigation").css("left","95%");
 
  $(".line1").removeClass("active");
  $(".line2").removeClass("active");
  $(".line3").removeClass("active");


  nav.style.height = "50px";
  main.style.marginTop = "50px";
  
      var i = 0;
      for (i = 0; i < menu.length; i++){
  menu[i].style.opacity="0.0";
  menu[i].style.marginTop="100px";
  };
      document.body.style.backgroundColor = "rgba(0,0,0,0.0)";
  
  } 
  //to open
  else if (nav.style.height <= "50px") {

 $(".navigation").css("width","20%");
  $(".navigation").css("left","80%");

  $(".line1").addClass("active");
  $(".line2").addClass("active");
  $(".line3").addClass("active");


  nav.style.height = "450px";
  main.style.marginTop = "275px";
      var i = 0;
      for (i = 0; i < menu.length; i++){
  menu[i].style.opacity="1.0";
  menu[i].style.marginTop="0px";
  };
      document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
  
  }

};





</script>