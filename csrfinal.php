<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

 

</head>
<style type="text/css">
   <style type="text/css">
    .container
      {
        width: 1600px!important;
        margin-top: 150px!important;
      }
      
img
{
  padding-bottom: 20px;
}

body
{
  background: #fff!important;
}
@media (min-width: 1200px)
{

.container {
    max-width: 1600px!important;
}
}

.slider, 
.slider > div {
    /* img default to Center Center. Maybe try 'center top'? */
    background-position: center center;
    display: block;
    width: 100%;
    height: 500px;
    /* height: 100vh; *//* If you want fullscreen */
    position: relative;
    background-size: cover;
    background-repeat: no-repeat;
    background-color: #000;
    overflow: hidden;
    -moz-transition: transform .4s;
    -o-transition: transform .4s;
    -webkit-transition: transform .4s;
    transition: transform .4s;
}

.slider > div {
    position: absolute;
}

.slider > i {
    color: #5bbd72;
    position: absolute;
    font-size: 60px;
    margin: 20px;
    top: 40%;
    text-shadow: 0 10px 2px #223422;
    transition: .3s;
    width: 30px;
    padding: 10px 13px;
    background: #fff;
    background: rgba(255, 255, 255, .3);
    cursor: pointer;
    line-height: 0;
    box-sizing: content-box;
    border-radius: 3px;
    z-index: 4;
}

.slider > i svg {
    margin-top: 3px;
}

.slider > .left {
    left: -100px;
}
.slider > .right {
    right: -100px;
}
.slider:hover > .left {
    left: 0;
}
.slider:hover > .right {
    right: 0;
}

.slider > i:hover {
    background:#fff;
    background: rgba(255, 255, 255, .8);
    transform: translateX(-2px);
}

.slider > i.right:hover {
    transform: translateX(2px);
}

.slider > i.right:active,
.slider > i.left:active {
    transform: translateY(1px);
}

.slider:hover > div {
    transform: scale(1.01);
}

.hoverZoomOff:hover > div {
    transform: scale(1);
}

.slider > ul {
    position: absolute;
    bottom: 10px;
    left: 50%;
    z-index: 4;
    padding: 0;
    margin: 0;
    transform: translateX(-50%);
}

.slider > ul > li {
    padding: 0;
    width: 20px;
    height: 20px;
    border-radius: 50%;
    list-style: none;
    float: left;
    margin: 10px 10px 0;
    cursor: pointer;
    border: 1px solid #fff;
    -moz-transition: .3s;
    -o-transition: .3s;
    -webkit-transition: .3s;
    transition: .3s;
}

.slider > ul > .showli {
    background-color: #7EC03D;
    -moz-animation: boing .5s forwards;
    -o-animation: boing .5s forwards;
    -webkit-animation: boing .5s forwards;
    animation: boing .5s forwards;
}

.slider > ul > li:hover {
    background-color: #7EC03D;
}

.slider > .show {
    z-index: 1;
}

.hideDots > ul {
    display: none;
}

.showArrows > .left {
    left: 0;
}

.showArrows > .right {
    right: 0;
}

.titleBar {
    z-index: 2;
    display: inline-block;
    background: rgba(0,0,0,.5);
    position: absolute;
    width: 100%;
    bottom: 0;
    transform: translateY(100%);
    padding: 20px 30px;
    transition: .3s;
    color: #fff;
}

.titleBar * {
    transform: translate(-20px, 30px);
    transition: all 700ms cubic-bezier(0.37, 0.31, 0.2, 0.85) 200ms;
    opacity: 0;
}

.titleBarTop .titleBar * {
    transform: translate(-20px, -30px);
}

.slider:hover .titleBar,
.slider:hover .titleBar * {
    transform: translate(0);
    opacity: 1;
}

.titleBarTop .titleBar {
    top: 0;
    bottom: initial;
    transform: translateY(-100%);
}

.slider > div span {
    display: block;
    background: rgba(0,0,0,.5);
    position: absolute;
    bottom: 0;
    color: #fff;
    text-align: center;
    padding: 0;
    width: 100%;
}


@keyframes boing {
    0% {
        transform: scale(1.2);
    }
    40% {
        transform: scale(.6);
    }
    60% {
        transform: scale(1.2);
    }
    80% {
        transform: scale(.8);
    }
    100% {
        transform: scale(1);
    }
}

/* -------------------------------------- */

#slider2 {
    max-width: 30%;
    margin-right: 20px;
}

.row2Wrap {
    display: flex;
}

.content {
    padding: 50px;
    margin-bottom: 100px;
}

html {
    height: 100%;
    box-sizing: border-box;
}
*, *:before, *:after {
    box-sizing: inherit;
}



.content {
    padding: 10px 15vw;
}
.carousel-control {
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
     width: 0%!important; 
    font-size: 20px;
     color: #000!important; 
     text-align: center; 
     text-shadow: 0 1px 2px rgba(0,0,0,.6); 
    background-color: rgba(0,0,0,0);
    filter: alpha(opacity=50);
    opacity: .5;
}
h3
{
  font-family: Yu Gothic Light!important;
  text-transform: uppercase; 
  font-size: 40px!important;

}
p{
text-align: justify;
text-align: center;
font-family: Segoe WP SemiLight!important;
font-size: 20px!important;
line-height:2em!important;
font-weight: 100;
  }
h2
{
  font-family: Yu Gothic Light!important;
  text-transform: uppercase; 
  font-size: 60px!important;
}

h1 {
  text-align: center;
  font-family: Tahoma, Arial, sans-serif;
  color: #06D85F;
  margin: 80px 0;
}


@-webkit-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@-moz-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@-o-keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
@keyframes float {
  0% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
  50% {
    transform: translatey(-30px);
    transform: translatex(20px);
  }
  100% {
    transform: translatey(0px);
    transform: translatex(0px);
  }
}
/* RESET
========================================== */
*, *:before, *:after {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

p{
  text-align: justify;
  font-size: 18px;
}


</style>
<body>

<div class="container" style="margin-top: 150px; width: 1800px!important;">  
  

<div class="row2Wrap">
<div style="height: 350px; width: 850px;">
   <h3 style="margin-top: 160px;font-size: 45px!important; text-align: center;font-weight: 100!important;">Emerald cares </h3>
</div>
<div class="slider" id="slider5" style="height: 400px; margin-left: 20px;">
    <div style="background-image:url(img/Emerald/csr/348A6319.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A6308.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A6369.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A6412.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/oldage.jpg)"></div>
    <!-- The Arrows -->
    <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
    <i class="right" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
    <!-- Title Bar -->
</div>
  
</div>
<div align="right" style="margin-top: 10px;">
<!-- <button type="button" class="btn btn-primary reads"  data-toggle="modal" data-target="#asharamam">Read more..</button> -->
<a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#asharamam"> Read more</a>
</div>
<br>

<div class="row2Wrap">

    <div class="slider" id="slider2" style="height: 400px;border: 1px solid #000;">
    <div style="background-image:url(img/Emerald/csr/schoolchildren.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/Child1.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/Child2.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A8786.jpg)"></div>
  

        <i class="left" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg> 
    </i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg>
    </i>
        <!-- Title Bar -->
        <!--     
        <span class="titleBar"> 
            <h1>I am like a leaf in the wind.</h1> 
            <p>Watch me soar!</p>
        </span> 
        -->

    </div>
    


    <!-- <h3>Individual slide text</h3> -->

    <!-- Slider 1 -->
    <div class="slider" id="slider3" style="height: 400px;border: 1px solid #000;">
        <div style="background-image:url(img/Emerald/Flood/IMG-20190729-WA0011.jpg)"></div>
       <div style="background-image:url(img/Emerald/Flood/1.jpeg)"></div>
    <div style="background-image:url(img/Emerald/Flood/2.jpeg)"></div>
    <div style="background-image:url(img/Emerald/Flood/3.jpeg)"></div>
     <div style="background-image:url(img/Emerald/Flood/4.jpeg)"></div>
    <div style="background-image:url(img/Emerald/Flood/4.jpeg)"></div>
    <div style="background-image:url(img/Emerald/Flood/IMG-20190729-WA0012.jpg)"></div>
    <div style="background-image:url(img/Emerald/Flood/IMG-20190729-WA0008.jpg)"></div>

        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
        <!-- Title Bar -->
        <!--     <span class="titleBar">
        <h1>I am like a leaf in the wind.</h1> 
        <p>Watch me soar!</p>
    </span> -->
    </div>


 
       <div class="slider" id="slider4" style="height: 400px;border: 1px solid #000; margin-left: 20px;">
   
       <div style="background-image:url(img/Emerald/csr/348A6936.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A7707.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A8795.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A9152.jpg)"></div>
    <div style="background-image:url(img/Emerald/csr/348A9147.jpg)"></div>

        <!-- The Arrows -->
        <i class="left" class="arrows" style="z-index:2; position:absolute;"><svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z"></path></svg></i>
        <i class="right" class="arrows" style="z-index:2; position:absolute;">
      <svg viewBox="0 0 100 100"><path d="M 10,50 L 60,100 L 70,90 L 30,50  L 70,10 L 60,0 Z" transform="translate(100, 100) rotate(180) "></path></svg></i>
        <!-- Title Bar -->
        <!--     <span class="titleBar">
        <h1>I am like a leaf in the wind.</h1> 
        <p>Watch me soar!</p>
    </span> -->
    </div>
   

</div>
</div>
<div style="margin-top: 10px"></div>
<a href="#" class="btn btn-primary" data-toggle="modal" data-target="#children" style="margin-left: 395px;">
Read more..
</a>
<a  href="#" class="btn btn-primary" style="margin-left: 457px; margin-top: 10px;" data-toggle="modal" data-target="#kaaja">Read more..</a>
<a href="#" class="btn btn-primary" style="margin-left: 419px; margin-top: 10px;"  data-toggle="modal" data-target="#pesumbomaigal">Read more..</a>



<!-- Modal -->
<div class="modal fade" id="asharamam" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Vasavi Muthiyor ILLAM</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <p>Emerald believes in spreading smiles every chance it gets.We actively contributed and helped construct Vasavi Mudhiyor Illam whih ensures sage and happy living for the abandoned senior citizens.</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="children" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">For education</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
       <p>EMERALD believes in the power of education and makes abundant contributions towards providing eduation for school students through handsome donations to the schools.</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="kaaja" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Gaja Relief</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
        <p>Emerald took a great inititive to be of rescue to the Gaja flood afffected areas of Kerala. We provided everyday essentials for almost 10,000 people and provided hope during distress.</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>


<!-- Modal -->
<div class="modal fade" id="pesumbomaigal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Pesum Bommaigal</h5>
        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </a>
      </div>
      <div class="modal-body">
       <p>Emerald played an integral part in organising "Pesum Bommaigal" a 9 day event where a huge number of physically challenged, mentally challenged , transgenders were givn a stage to showcase their talent and were duly paid to do so. This resulted in huge awareness among common public and also enabled these people make a living through multiple enquiries for performances based on this event.</p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn btn-secondary" data-dismiss="modal">Close</a>
      </div>
    </div>
  </div>
</div>



<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script> -->
<script type="text/javascript">
    
(function($) {
  "use strict";
  $.fn.sliderResponsive = function(settings) {
    
    var set = $.extend( 
      {
        slidePause: 5000,
        fadeSpeed: 800,
        autoPlay: "on",
        showArrows: "off", 
        hideDots: "off", 
        hoverZoom: "on",
        titleBarTop: "off"
      },
      settings
    ); 
    
    var $slider = $(this);
    var size = $slider.find("> div").length; //number of slides
    var position = 0; // current position of carousal
    var sliderIntervalID; // used to clear autoplay
      
    // Add a Dot for each slide
    $slider.append("<ul></ul>");
    $slider.find("> div").each(function(){
      $slider.find("> ul").append('<li></li>');
    });
      
    // Put .show on the first Slide
    $slider.find("div:first-of-type").addClass("show");
      
    // Put .showLi on the first dot
    $slider.find("li:first-of-type").addClass("showli")

     //fadeout all items except .show
    $slider.find("> div").not(".show").fadeOut();
    
    // If Autoplay is set to 'on' than start it
    if (set.autoPlay === "on") {
        startSlider(); 
    } 
    
    // If showarrows is set to 'on' then don't hide them
    if (set.showArrows === "on") {
        $slider.addClass('showArrows'); 
    }
    
    // If hideDots is set to 'on' then hide them
    if (set.hideDots === "on") {
        $slider.addClass('hideDots'); 
    }
    
    // If hoverZoom is set to 'off' then stop it
    if (set.hoverZoom === "off") {
        $slider.addClass('hoverZoomOff'); 
    }
    
    // If titleBarTop is set to 'on' then move it up
    if (set.titleBarTop === "on") {
        $slider.addClass('titleBarTop'); 
    }

    // function to start auto play
    function startSlider() {
      sliderIntervalID = setInterval(function() {
        nextSlide();
      }, set.slidePause);
    }
    
    // on mouseover stop the autoplay
    $slider.mouseover(function() {
      if (set.autoPlay === "on") {
        clearInterval(sliderIntervalID);
      }
    });
      
    // on mouseout starts the autoplay
    $slider.mouseout(function() {
      if (set.autoPlay === "on") {
        startSlider();
      }
    });

    //on right arrow click
    $slider.find("> .right").click(nextSlide)

    //on left arrow click
    $slider.find("> .left").click(prevSlide);
      
    // Go to next slide
    function nextSlide() {
      position = $slider.find(".show").index() + 1;
      if (position > size - 1) position = 0;
      changeCarousel(position);
    }
    
    // Go to previous slide
    function prevSlide() {
      position = $slider.find(".show").index() - 1;
      if (position < 0) position = size - 1;
      changeCarousel(position);
    }

    //when user clicks slider button
    $slider.find(" > ul > li").click(function() {
      position = $(this).index();
      changeCarousel($(this).index());
    });



 
//////////////////////////////////////////////
// Activate each slider - change options
//////////////////////////////////////////////
$(document).ready(function() {
  
  $("#slider1").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    hideDots: "on", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
    $("#slider5").sliderResponsive({
  // Using default everything
    // slidePause: 5000,
    // fadeSpeed: 800,
    // autoPlay: "on",
    // showArrows: "off", 
    // hideDots: "off", 
    // hoverZoom: "on", 
    // titleBarTop: "off"
  });
  
  $("#slider2").sliderResponsive({
    // fadeSpeed: 300,
    // autoPlay: "off",
    showArrows: "on",
    hideDots: "on"
  });
  
  $("#slider3").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });
    $("#slider4").sliderResponsive({
    hoverZoom: "off",
    hideDots: "on"
  });

  
}); 



</script>
</body>
</html>
