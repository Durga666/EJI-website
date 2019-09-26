<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
 

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
.navbar {
    /*background-color: #264d6a !important;*/
    font-size: 1.2em!important;
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
.navbar.scrolling-navbar {

    padding-top: 23px!important;
    padding-bottom: 30px!important;
}
.navbar-nav>li>a {
     padding-top: 8px!important; 
     padding-bottom:8px!important; 
     padding-left: 8px!important; 
     padding-right:8px!important; 
   }
   .btn .btn-group-sm>.btn, .btn-sm {
    /*padding: .20rem .5rem;*/
    font-size: 1.2em!important;
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
  font-family: Quicksand!important;
  text-transform: uppercase; 
  color: 
  font-size: 40px!important;

}
p{
text-align: justify;
text-align: center;
font-family: Open sans!important;
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

body {
  background: #3e4146;
  font-family: 'Roboto Condensed', sans-serif;
}

/* BUTTON
========================================== */
.button {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: 2;
}
.button button {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  -moz-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  -o-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  font-family: inherit;
  background-color: #ffffff;
  border: 0;
  padding: 15px 25px;
  color: #000000;
  text-transform: uppercase;
  font-size: 21px;
  letter-spacing: 1px;
  width: 200px;
  overflow: hidden;
  outline: 0;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
  visibility: visible;
  opacity: 1;
  font-weight: bold;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.6);
}
.button button:hover {
  cursor: pointer;
  background-color: #8e6ac1;
  color: #ffffff;
}
.button button span {
  opacity: 1;
}
.button.clicked button {
  visibility: hidden;
  oacity: 0;
}

/* POP-UP
========================================== */
.pop-up {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%) scale(0.9);
  -moz-transform: translate(-50%, -50%) scale(0.9);
  -ms-transform: translate(-50%, -50%) scale(0.9);
  -o-transform: translate(-50%, -50%) scale(0.9);
  transform: translate(-50%, -50%) scale(0.9);
  overflow-y: auto;
  box-shadow: 0px 6px 30px rgba(0, 0, 0, 0.4);
  visibility: hidden;
  opacity: 0;
  -webkit-transition: all 0.3s;
  -moz-transition: all 0.3s;
  -o-transition: all 0.3s;
  transition: all 0.3s;
  z-index: 10;
  background-color: #f8e8e1;
  width: 100%;
  height: 100%;
}
@media (min-width: 768px) {
  .pop-up {
    width: calc(100% - 40px);
    height: auto;
    max-width: 900px;
  }
}
.pop-up .content {
  width: 100%;
  max-width: 900px;
  overflow: hidden;
  text-align: center;
  position: relative;
  min-height: 100vh;
}
@media (min-width: 768px) {
  .pop-up .content {
    min-height: inherit;
  }
}
.pop-up .content .container {
  padding: 100px 20px 140px;
}
@media (min-width: 568px) {
  .pop-up .content .container {
    padding: 50px 20px 80px;
  }
}
@media (min-width: 768px) {
  .pop-up .content .container {
    padding: 70px 0px 90px;
    max-width: 520px;
    margin: 0 auto;
  }
}
.pop-up .content .close {
  position: absolute;
  top: 20px;
  left: 20px;
  font-size: 1.1rem;
  letter-spacing: 0.05rem;
  color: #3e4146;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
.pop-up .content .close:hover {
  cursor: pointer;
  color: #f66867;
}
.pop-up .content .dots .dot {
  position: absolute;
  border-radius: 100%;
  z-index: 11;
}
.pop-up .content .dots .dot:nth-of-type(1) {
  top: -80px;
  right: -80px;
  width: 160px;
  height: 160px;
  background-color: #689bf6;
  -webkit-animation: float 6s ease-in-out infinite;
  -moz-animation: float 6s ease-in-out infinite;
  -o-animation: float 6s ease-in-out infinite;
  animation: float 6s ease-in-out infinite;
}
@media (min-width: 768px) {
  .pop-up .content .dots .dot:nth-of-type(1) {
    top: -190px;
    right: -190px;
    width: 380px;
    height: 380px;
  }
}
.pop-up .content .dots .dot:nth-of-type(2) {
  bottom: -120px;
  left: -120px;
  width: 240px;
  height: 240px;
  background-color: #f66867;
  -webkit-animation: float 8s ease-in-out infinite;
  -moz-animation: float 8s ease-in-out infinite;
  -o-animation: float 8s ease-in-out infinite;
  animation: float 8s ease-in-out infinite;
}
.pop-up .content .dots .dot:nth-of-type(3) {
  bottom: -50px;
  right: -50px;
  width: 100px;
  height: 100px;
  background-color: #ffd84c;
  -webkit-animation: float 4s ease-in-out infinite;
  -moz-animation: float 4s ease-in-out infinite;
  -o-animation: float 4s ease-in-out infinite;
  animation: float 4s ease-in-out infinite;
}
.pop-up .content .title h1 {
  text-align: center;
  color: #000;
  text-transform: uppercase;
  font-weight: 900;
   font-family: Quicksand!important;
  font-size: 2.8rem;
  letter-spacing: 0.05rem;
}
.pop-up .content img {
  width: 100%;
  max-width: 220px;
  display: inline-block;
  margin: 30px 0 40px 0;
  opacity: 0;
  -webkit-transform: translateX(60px);
  -moz-transform: translateX(60px);
  -ms-transform: translateX(60px);
  -o-transform: translateX(60px);
  transform: translateX(60px);
  -webkit-transition: 0.2s;
  -moz-transition: 0.2s;
  -o-transition: 0.2s;
  transition: 0.2s;
  -webkit-backface-visibility: hidden;
}
@media (min-width: 768px) {
  .pop-up .content img {
    max-width: 300px;
  }
}
.pop-up .content .subscribe h1 {
  font-size: 1.5rem;
  color: #3e4146;
  line-height: 130%;
  letter-spacing: 0.07rem;
  margin-bottom: 30px;
}
.pop-up .content .subscribe h1 span {
  color: #f66867;
}
.pop-up .content .subscribe form {
  overflow: hidden;
}
.pop-up .content .subscribe form input {
  width: 100%;
  float: left;
  padding: 15px 20px;
  text-align: center;
  font-family: inherit;
  font-size: 1.1rem;
  letter-spacing: 0.05rem;
  outline: 0;
}
.pop-up .content .subscribe form input[type=email] {
  margin-bottom: 15px;
  border: 1px solid #bec1c5;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=email] {
    margin-bottom: 0px;
    width: 75%;
    border-right-width: 0px;
  }
}
.pop-up .content .subscribe form input[type=email]:focus {
  border-color: #3e4146;
}
.pop-up .content .subscribe form input[type=submit] {
  background-color: #8e6ac1;
  color: #ffffff;
  border: 1px solid #8e6ac1;
  -webkit-transition: all 0.4s;
  -moz-transition: all 0.4s;
  -o-transition: all 0.4s;
  transition: all 0.4s;
}
@media (min-width: 768px) {
  .pop-up .content .subscribe form input[type=submit] {
    width: 25%;
  }
}
.pop-up .content .subscribe form input[type=submit]:hover {
  cursor: pointer;
  background-color: #7349af;
  border-color: #7349af;
}
.pop-up.open {
  visibility: visible;
  opacity: 1;
  -webkit-transform: translate(-50%, -50%) scale(1);
  -moz-transform: translate(-50%, -50%) scale(1);
  -ms-transform: translate(-50%, -50%) scale(1);
  -o-transform: translate(-50%, -50%) scale(1);
  transform: translate(-50%, -50%) scale(1);
}
.pop-up.open img {
  opacity: 1;
  -webkit-transition: 1s;
  -moz-transition: 1s;
  -o-transition: 1s;
  transition: 1s;
  -webkit-transition-delay: 0.3s;
  -moz-transition-delay: 0.3s;
  -o-transition-delay: 0.3s;
  transition-delay: 0.3s;
  -webkit-transform: translateX(0px);
  -moz-transform: translateX(0px);
  -ms-transform: translateX(0px);
  -o-transform: translateX(0px);
  transform: translateX(0px);
}
h4
{
  margin-left: 10px!important;
  font-size: 20px!important;
  font-family: Open sans!important;
}
.modal-dialog {
    max-width: 900px!important;
}
.fixed-top {
     position: absolute;!important; 
    }

    h6
    {
      font-size: 20px !important;
    }

</style>


<body>
<?php include('header_final1.php');?>

<?php include('nav.php');?>  
<div class="container" style="margin-top: 150px; width: 1800px!important;">  
  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    
 

    <div class="carousel-inner" style="background-color: #fff!important;">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px; font-family: Quicksand!important; color: #000!important;">Canteen</h3><br><br> 
              <h4 style="margin-left: -50px;">"Good foods leads to good living."</h4>
              <div class="text-right" style="margin-top: 0px;" >
            
            <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
            </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Canteen.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>





<div class="pop-up">
  <div class="content">
    <div class="container">
     
      
      <span class="close closes">Close</span>
      
      <div class="title">
        <h1>Canteen</h1><br>
      </div>
      
      <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Emerald provides Cafeteria and healthy food to employees with minimal cost. The food preparing machines are fully automated with fast process. Hygiene is maintained regularly inside the canteen.</p>
      
      
    </div>
  </div>
</div>




 <div style="margin-top:80px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> RESPONSIBLE CORPORATE</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/0 Discharge Policy.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 100px;">"0 discharge policy"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
</div>


      <div class="item">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>DISPENSARY</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Employee health covered."</h4>
              <div class="text-right" style="margin-top: 0px;" >
                   <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/dispensary.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 90px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



<div class="pop-up">
  <div class="content">
    <div class="container">
   
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>DISPENSARY</h1><br>
      </div>
      
      <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">24/7 services is provided for employees. Naturopathy and Alopathy doctors with two nurses will be available full time for providing service. Medicine is provided in free of cost. Ambulance service is provided 24/7 at free of cost for employees and also for people who is residing near to the factory.</p>
    </div>
  </div>
</div>




 <div style="margin-top: 100px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 100px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Sewage.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px; margin-top: 80px;">"Sewage treatment plant"</h4>
            
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

    
      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>LABORATORY</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Your 360&#176; health scan"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
<div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  

                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/lab.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>


  <div class="pop-up">
  <div class="content">
    <div class="container">
   
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>LABORATORY</h1><br>
      </div>
      
      <h4 style="width: 650px; margin-left: -120px!important; line-height: 2em; text-align: justify;">Blood test, ECG is free of cost and master health checkup is provided for the employees.</h4>
    </div>
  </div>
</div>

  <div class="col-md-4" style="margin-top: 90px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>
 <div style="margin-top: 100px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 100px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/ewaste.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
        
              <h4 style="margin-left: -120px; margin-top: 80px;">"Clean disposal of E-waste"</h4>
              <div class="text-right" style="margin-top: 0px;" >
            
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>









<div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>CRECHE</Strong></h3><br>
              <h4 style="margin-left: -50px;">"We care for your little ones"</h4>
              <div class="text-right" style="margin-top: 0px;" >
          <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Creche.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>


    <div class="pop-up">
  <div class="content">
    <div class="container">
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>CRECHE</h1><br>
      </div>
      
        <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Employees infant babies are taken care in healthy atmosphere when they are in duty.</p>

    </div>
  </div>
</div>






  <div class="col-md-4" style="margin-top: 90px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>
 <div style="margin-top: 100px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 100px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5; ">
        <div class="col-md-6">
          <img src="img/Emerald/disposal.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px; margin-left: 50px;">"Authorised partnership for waster disposal"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>





      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>HOSTEL</Strong></h3><br>
              <h4 style="margin-left: -50px;">Safe living assured</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/accomadation1.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



    <div class="pop-up">
  <div class="content">
    <div class="container">
 
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>HOSTEL</h1><br>
      </div>
      
      
        <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Total 1500 boys and 350 girls residing in the company’s hostel at free of cost. Tailoring class is provided for girls. Separate gym for boys and girls is provided.</p>
    </div>
  </div>
</div>  




 <div style="margin-top: 100px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Safety.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
        
              <h4 style="margin-left: -120px;margin-top: 80px;">"Safe Working environment"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>











      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>SPORTS</Strong></h3><br>
              <h4 style="margin-left: -50px;">"All work no play does NOT apply to Emerald"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Sports.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



<div class="pop-up">
  <div class="content">
    <div class="container">
 
      <span class="close">close</span>
      
      <div class="title">
        <h1>SPORTS</h1><br>
      </div>
      
        <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Various games like volley ball, foot ball, cricket, carrom is provided to employees for their extra curriculum.</p>
    </div>
  </div>
</div>  



 <div style="margin-top: 90px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 100px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/healthy.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
    
              <h4 style="margin-left: -120px;margin-top: 80px;margin-left: 50px;">"Healthy workers = Our commitment"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>

      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>LOAN</Strong></h3><br>
              <h4 style="margin-left: -50px;">" We are one family "</h4>
              <div class="text-right" style="margin-top: 0px;" >
                   <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/loans.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>

  <div class="pop-up">
  <div class="content">
    <div class="container">

      
      <span class="close">close</span>
      
      <div class="title">
        <h1>LOAN</h1><br>
      </div>
      
         <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Interest free loan has been provided for our employees.145 emergency loan and 1033 normal loan had been provided.</p>
    </div>
  </div>
</div>  





 <div style="margin-top: 90px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 100px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/energy1.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;">"Energy saving is energy produced"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                  
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>









      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>EDUCATIONAL SUPPORT</Strong></h3><br>
              <h4 style="margin-left: -50px;">"We believe that education makes the difference"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important;border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>

                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Education.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>

 <div class="pop-up">
  <div class="content">
    <div class="container">
     
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>EDUCATIONAL SUPPORT</h1><br>
      </div>
      
      <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Emerald Children toppers were awarded during annual day function, most of the winners were girl children, education a girl child is equal  to educating 4 members of a family. Our service to education will continue forever.
    </div>
  </div>
</div>  





 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Swach.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;">"Swachh Emerald"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                  
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>




      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>EMERALD CENTER OF EXCELLENCE</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Emerald center of Excellence for you Excellent people"</h4>
              <div class="text-right" style="margin-top: 0px;" >
               <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Training.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>


 <div class="pop-up">
  <div class="content">
    <div class="container">
 
      <span class="close">Close</span>
      
      <div class="title">
        <h1>EMERALD CENTER OF EXCELLENCE</h1><br>
      </div>
    <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Emerald center of Excellence, facilitate to create and sustain capabilities of organization with a view to impact their personal and professional life through training, counselling and coaching. 
    </div>
  </div>
</div>  



 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Happy (2).jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;">"Our happy place" where everyone work in harmony. </h4>
              <div class="text-right" style="margin-top: 0px;" >
          
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>


      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>FIRST AID TRAINING PROGRAM</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Your 360&#176; health scan"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 <div class="button">
                <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button> 
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/firstaid1.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>


   <div class="pop-up">
  <div class="content">
    <div class="container">
   
      <span class="close">close</span>
      
      <div class="title">
        <h1>FIRST AID TRAINING PROGRAM</h1><br>
      </div>
      
  
      <p style="width: 650px; margin-left: -150px; text-align: justify;font-size: 1.8em!important;">Emerald center of Excellence, facilitate to create and sustain capabilities of organization with a view to impact their personal and professional life through training, counselling and coaching. 
    </div>
  </div>
</div>  



 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/6s.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <p style="margin-left: -120px;margin-top: 80px;margin-left: 50px;">"Sort, Set in order, Shine, Safety, Standardize, Sustain"</p>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>





      <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>EMERALD CELEBRATES</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Lets celebrate festivals together"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                  <div class="button">
                <!-- <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important;color: #808B96!important; border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button>  -->
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Celebrates.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



 <div class="pop-up">
  <div class="content">
    <div class="container">
 
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>

    </div>
  </div>
</div>  



 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Environment.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;">"Green Environment"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>


            <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>ANNUAL DAY</Strong></h3><br>
              <h4 style="margin-left: -50px;">"We recognize our shining stars"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 <div class="button">
                <!-- <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important;border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button>  -->
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/annualday.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



   <div class="pop-up">
  <div class="content">
    <div class="container">
      <div class="dots">
        <div class="dot"></div>
        <div class="dot"></div>
        <div class="dot"></div>
      </div>
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>

    </div>
  </div>
</div>  




 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/3r.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
        
              <h4 style="margin-left: -120px;margin-top: 80px;">"3 R's, Reduce, Re-Use and Recycle is the mantra we preach."</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>


            <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5; "><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>WAY OF LIFE</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Not just work, we teach values."</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 <div class="button">
                <!-- <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important;border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button>  -->
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/wayoflife.jpg" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>


   <div class="pop-up">
  <div class="content">
    <div class="container">
    
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>
      
  
    </div>
  </div>
</div>  




 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/Safe.JPG" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
        
              <h4 style="margin-left: -120px;margin-top: 80px;">"A safety at the time of crisis"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>




            <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>SPORTS CLUB</Strong></h3><br>
              <h4 style="margin-left: -50px;">"Your everyday fitness sealed"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                  <div class="button">
                <!-- <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important;border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button>  -->
            </div>
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Sportsclub.JPG" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>

   <div class="pop-up">
  <div class="content">
    <div class="container">

      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>
      
     
      
      <div class="subscribe">
        <h1></h1>
      
        <form>
          <input type="email" placeholder="Your email address">
          <input type="submit" value="Subscribe">
        </form>
      </div>
    </div>
  </div>
</div>  




 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/DSC08573.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;margin-left: 20px;">"Designated areas for hazardous products "</h4>
              <div class="text-right" style="margin-top: 0px;" >
                
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>

          


            <div class="item">
      <div class="item active">
       <div class="col-md-12">
  <div class="row">
    <div class="col-md-8" style="width: 300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color:#cfdee5;"><br>
        <div class="col-md-6">
              <h3 style="margin-top: 50px;"><Strong>AMBULANCE</Strong></h3><br>
              <h4 style="margin-left: -50px;">"At your rescue under one second"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                   <div class="button">
                <!-- <button type="button" class="btn btn-outline-primary" style="background-color:#cfdee5!important; color: #808B96!important;border: none!important; margin-top: 100px; margin-left: 150px; box-shadow: none; width: 220px; font-size: 15px;">Read more..</button>  -->
            </div>
               <div class="pop-up">
  <div class="content">
    <div class="container">
  
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>
    
    
    </div>
  </div>
</div>  
                  </div>
          </div>
          <div class="col-md-4">
            <img src="img/Emerald/Ambulance.JPG" style="width:450px; height: 250px;">
          </div>
      </div>
    </div>
  </div>
  <div class="col-md-4" style="margin-top: 100px;">
    <h2 style="text-align: center;">Human First</h2>
  </div>
  </div>



   <div class="pop-up">
  <div class="content">
    <div class="container">
      
      
      <span class="close">close</span>
      
      <div class="title">
        <h1>subscribe</h1>
      </div>
 
    </div>
  </div>
</div>  


 <div style="margin-top: 150px;"></div>
<div class="row">
  <div class="col-md-4" style="margin-top: 90px;">
   <h2 style="text-align: center;"> Responsible Corporate</h2>
  </div>
    <div class="col-md-8" style="height:300px">
  <div class="panel panel-default">
      <div class="panel-body" style="background-color: #cfdee5;">
        <div class="col-md-6">
          <img src="img/Emerald/20kms.jpg" style="width:450px; height: 250px;">
          </div>
        <div class="col-md-6">
              <h4 style="margin-left: -120px;margin-top: 80px;margin-left: 20px;">"Rules for life"</h4>
              <div class="text-right" style="margin-top: 0px;" >
                 
                  </div>
          </div>
    </div>
  </div>
  </div>
</div>
</div>
      </div>

      </div>






    </div>

    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<div class="clearfix"></div><br>

<div style="margin-top: 80px;"></div>

<hr>
<?php include("csrfinal.php");?>

</div>
<div class="clearfix"></div><br>





<footer class="page-footer font-small unique-color-dark">


  <div style="background-color: #666666; height: 100px;border-bottom:1px solid #fff;">
    <div class="container" style="width: 1100px!important">

      <!-- Grid row-->
      <div class="row py-4 d-flex align-items-center" style="text-transform: uppercase; font-family:'Century Gothic'; font-weight: 100;">

        <!-- Grid column -->
        <div class="col-md-4">
         <a class="text-center f1" id="collaborate" href="#" style="vertical-align: middle; line-height: 50px; font-size:2em;">Collaborate With Us!</a>
        </div>
         <div class="col-md-4 text-center">
         <a class="f1" id="careers" href="#" style="vertical-align: middle; line-height: 50px; font-size:2em;">Careers</a>
        </div>
         <div class="col-md-4 text-center">
         <a class="f1" id="enquire" href="#" style="vertical-align: middle; line-height: 50px; font-size:2em;">Enquire</a>
        </div>
        
      </div>
      <!-- Grid row-->

    </div>
  </div> 




  <!-- Footer Links -->
  <div class="container text-center text-md-left mt-5"  style="font-family: 'Century Gothic';font-weight: 100;background-color: #666666; width: 1150px;">

    <!-- Grid row -->
    <div class="row mt-3">

      <!-- Grid column -->
         <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Corporate Office</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60%;">
        <p style="font-size: 1.1em!important;">
         230,Thiruvenkatasamy Road (East),<br>R.S.Puram,Coimbatore 641 002. India.</p>
        <p style="font-size: 1.1em!important;">
          <i class="fas fa-envelope mr-3"></i>info@ejindia.com</p>
        <p >
          <i class="fas fa-phone mr-3"></i>+91 422 4222200, 2555550</p>
        <p style="font-size: 1.1em!important;">
          <i class="fas fa-print mr-3"></i>+91 422 2555560.</p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Policies</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="font-size: 1.1em!important;">
          <a href="#!">Legal</a>
        </p>
        <p style="font-size: 1.1em!important;">
          <a href="#!">Privacy</a>
        </p>
        <p style="font-size: 1.1em!important;">
          <a href="#!">Cookies</a>
        </p>
        <p style="font-size: 1.1em!important;">
          <a href="#!">Site Map</a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Useful links</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
    <p>
          <a href="../ejindialandingdev/newsandevents.php">News and Events</a>
        </p>
        <p>
          <a href="../ejindialandingdev/collobratewithus.php">Collaborate With Us!</a>
        </p>
        <p>
          <a href="../ejindialandingdev/carrers.php">Careers</a>
        </p>
        <p>
          <a href="../ejindialandingdev/enquiries.php">Enquiries</a>
        </p>
     
     

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">

        <!-- Links -->
        <h6 class="text-uppercase font-weight-bold">Factory</h6>
        <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
        <p style="font-size: 1.1em!important;">
         NSN Palayam,Rakki Palayam,<br>
        Coimbatore, Tamil Nadu 641031.<br>
       India.</p>
        <p style="font-size: 1.1em!important;">
          <i class="fas fa-envelope mr-3"></i> info@ejindia.com</p>
        <p style="font-size: 1.1em!important;">
          <i class="fas fa-phone mr-3"></i> 0422 422 2000</p>
       
      </div>
      <!-- Grid column -->
      
    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->
  <!-- Copyright -->
   <!-- Grid row -->
      <!-- Grid column -->
<div class="container-fluid">
  <div class="col-md-12">
    <div class="row">
  <div class="col-md-6" style="padding-bottom: 0;">
      <p class="text-md-right" style="font-weight: 100;line-height: 30px;font-size: 1.1em!important;">© 2019 All Rights Reserved.
          <a href="http://www.ejindia.com">
            <strong>EMERALD</strong>
          </a>
        </p>

  </div>
  <div class="col-md-6">
       <div class="text-md-left mt-0">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 btn-rounded">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 btn-rounded">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 btn-rounded">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 btn-rounded">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-circle-up fa-1x" aria-hidden="true"></i></a>

  </div>
</div>
</div>
</div>
  <!-- Copyright -->

</footer>
<!-- Footer -->









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

    //this changes the image and button selection
    function changeCarousel() {
      $slider.find(".show").removeClass("show").fadeOut();
      $slider
        .find("> div")
        .eq(position)
        .fadeIn(set.fadeSpeed)
        .addClass("show");
      // The Dots
      $slider.find("> ul").find(".showli").removeClass("showli");
      $slider.find("> ul > li").eq(position).addClass("showli");
    }

    return $slider;
  };
})(jQuery);


 
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
    // hideDots: "off", 
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

  $('button').click(function(){
  $('.pop-up').addClass('open');
});

$('.pop-up .close').click(function(){
  $('.pop-up').removeClass('open');
});



</script>
</body>
</html>
