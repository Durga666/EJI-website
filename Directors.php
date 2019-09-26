<style type="text/css">
    /* FontAwesome for working BootSnippet :> */

#team {
    background: #eee !important;
}

.btn-primary:hover,
.btn-primary:focus {
    background-color: #108d6f;
    border-color: #108d6f;
    box-shadow: none;
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #007b5e;
    border-color: #007b5e;
}

section {
    padding: 7px 0;
}

section .section-title {
    text-align: center;
    color: #000225;
    margin-bottom: 50px;
    text-transform: uppercase;
}

#team .card {
    border: none;
    background: #70727b;
}

.image-flip:hover .backside,
.image-flip.hover .backside {
    -webkit-transform: rotateY(0deg);
    -moz-transform: rotateY(0deg);
    -o-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    transform: rotateY(0deg);
    border-radius: .25rem;
}

.image-flip:hover .frontside,
.image-flip.hover .frontside {
    -webkit-transform: rotateY(180deg);
    -moz-transform: rotateY(180deg);
    -o-transform: rotateY(180deg);
    transform: rotateY(180deg);
}

.mainflip {
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -ms-transition: 1s;
    -moz-transition: 1s;
    -moz-transform: perspective(1000px);
    -moz-transform-style: preserve-3d;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
    position: relative;
}

.frontside {
    position: relative;
    -webkit-transform: rotateY(0deg);
    -ms-transform: rotateY(0deg);
    z-index: 2;
    margin-bottom: 30px;
}

.backside {
    position: absolute;
    top: 0;
    left: 0;
    background: white;
    -webkit-transform: rotateY(-180deg);
    -moz-transform: rotateY(-180deg);
    -o-transform: rotateY(-180deg);
    -ms-transform: rotateY(-180deg);
    transform: rotateY(-180deg);
/*    -webkit-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    -moz-box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);
    box-shadow: 5px 7px 9px -4px rgb(158, 158, 158);*/
}

.frontside,
.backside {
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    -ms-backface-visibility: hidden;
    backface-visibility: hidden;
    -webkit-transition: 1s;
    -webkit-transform-style: preserve-3d;
    -moz-transition: 1s;
    -moz-transform-style: preserve-3d;
    -o-transition: 1s;
    -o-transform-style: preserve-3d;
    -ms-transition: 1s;
    -ms-transform-style: preserve-3d;
    transition: 1s;
    transform-style: preserve-3d;
}

.frontside .card,
.backside .card {
    min-height: 312px;
}

.backside .card a {
    font-size: 18px;
    color: #ccd9e2 !important;
    font-family: Kalinga!important;
}

.frontside .card .card-title,
.backside .card .card-title {
    color: #ccd9e2 !important;
    font-family: Kalinga!important;
}

.frontside .card .card-body img {
    width: 120px;
    height: 120px;
    margin-left: 50px;
    border-radius: 50%;
}
#hero {
  background: linear-gradient(rgba(252, 253, 255, 0.7), rgba(76, 79, 92, 0.64)), url(img/Keypeople/003.jpg);
  /*background: url(img/2_edit.jpg);*/
  background-size: cover;
  background-repeat: no-repeat;
  height: 500px!important;
  display: flex;
  justify-content: center;
  align-items: center;
}

.hero-inner {
  text-align: center;
  max-width: 600px;
  color: #fff;
}

h1,
h2 {
  margin: 0;
  color: white;
  opacity: 0;
  -webkit-transform: translateY(40px);
          transform: translateY(40px);
}

h1 {
  font-size: 3rem;
  margin: 0 0 2rem;
  -webkit-animation: animateIn 1000ms ease forwards;
          animation: animateIn 1000ms ease forwards;
}

h2 {
  font-weight: 400;
  font-size: 2rem;
  -webkit-animation: animateIn 1000ms ease 300ms forwards;
          animation: animateIn 1000ms ease 300ms forwards;
}

@-webkit-keyframes animateIn {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
            transform: translateY(40px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}

@keyframes animateIn {
  0% {
    opacity: 0;
    -webkit-transform: translateY(40px);
            transform: translateY(40px);
  }
  100% {
    opacity: 1;
    -webkit-transform: translateY(0);
            transform: translateY(0);
  }
}
.frontside .card .card-body img {
    width: 182px!important;
    height: 179px!important;
    border-radius: 65%;
}
h4
{
    font-size: 18px;
}


</style>
<section id="team" class="pb-5" style="padding-bottom: 10rem!important;">
    <div class="container-fluid">
        <div style="margin-top: 100px;">
        <h5 class="section-title h1" style="font-family: Yu Gothic Light!important; font-size: 50px!important; color: #264d6a!important;">DIRECTORS</h5>
        <div style="margin-top: 100px;">
            <h3 style="margin-left: -950px;">WHOLE TIME DIRECTORS</h3>
            <h3 style="margin-left: 850px; margin-top: -50px;">INDEPENDENT NON-EXECUTIVE DIRECTORS</h3>
            <br>
        <div class="row" align="center">
         
                    <div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 0px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/Director/04.jpg" alt="card image"></p>
                                    <br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">DHIAAN SRINIVASAN</h4>
                                   
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4" style="padding-right: 0px !important;">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">Dhiaan Srinivasan</h4>
                                    <p class="card-text" style="font-family: Yu Gothic Light!important;">This is basic card with image on top, title, description and button.This is basic card with image on top</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 0px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                
                                    <p><img class=" img-fluid" src="img/Director/06.jpg" alt="card image"></p>
                                    <Br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">KARUNAKARAN</h4>
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">KARUNAKARAN  </h4>
                                    <p class="card-text" style="font-family: Yu Gothic Light!important;">This is basic card with image on top, title, description and button.This is basic card with image on top</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
<div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 15px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/Director/05.jpg" alt="card image" style="margin-left: 45px;"></p>
                                    <br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">G.K VENKATAGOPAL</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">G.K VENKATAGOPAL</h4>
                                    <p class="card-text">This is basic card with image on top, title, description and button.This is basic card with image on top</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 0px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/Director/03.jpg" alt="card image" style="margin-left: 60px;"></p>
                                    <br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">NISHTA SRINIVASAN</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">NISHTA SRINIVASAN</h4>
                                    <p class="card-text" style="font-family: Yu Gothic Light!important;">This is basic card with image on top, title, description and button.This is basic card with image on top</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 0px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/Director/02.jpg" alt="card image"></p>
                                    <br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">R.VENKATESAN</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">R.VENKATESAN</h4>
                                   
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-xs-12 col-sm-4 col-md-2" style="padding-right: 0px !important;">
                <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                    <div class="mainflip">
                        <div class="frontside">
                            <div class="card">
                                <div class="card-body text-center">
                                    <p><img class=" img-fluid" src="img/Director/01.jpg" alt="card image"></p>
                                    <br>
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">C.R.NARAYANASWAMY</h4>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="backside">
                            <div class="card">
                                <div class="card-body text-center mt-4">
                                    <h4 class="card-title" style="font-family: Yu Gothic Light!important;">C.R.NARAYANASWAMY</h4>
                                    <p class="card-text" style="font-family: Yu Gothic Light!important;">This is basic card with image on top, title, description and button.This is basic card with image on top</p>
                                    <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-skype"></i>
                                            </a>
                                        </li>
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="#">
                                                <i class="fa fa-google"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<header id="hero" style="background-color: #cbd9e6">
  <div class="hero-inner"> 
  </div>
</header>
