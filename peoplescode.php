<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
<style type="text/css">
  /*********************** Demo - 1 *******************/
.box1 img,.box1:after,.box1:before{width:100%;transition:all .3s ease 0s}
.box1 .icon,.box2,.box3,.box4,.box5 .icon li a{text-align:center}
.box10:after,.box10:before,.box1:after,.box1:before,.box2 .inner-content:after,.box3:after,.box3:before,.box4:before,.box5:after,.box5:before,.box6:after,.box7:after,.box7:before{content:""}
.box1,.box11,.box12,.box13,.box14,.box16,.box17,.box18,.box2,.box20,.box21,.box3,.box4,.box5,.box5 .icon li a,.box6,.box7,.box8{overflow:hidden}
.box1 .title,.box10 .title,.box4 .title,.box7 .title{letter-spacing:1px}
.box3 .post,.box4 .post,.box5 .post,.box7 .post{font-style:italic}
body{background-color:#f1f1f2}
.mt-30{margin-top:30px}
.mt-40{margin-top:40px}
.mb-30{margin-bottom:30px}
.box1 .icon,.box1 .title{margin:0;position:absolute}
.box1{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box1:after,.box1:before{height:50%;background:rgba(0,0,0,.5);position:absolute;top:0;left:0;z-index:1;transform-origin:100% 0;transform:rotateZ(90deg)}
.box1:after{top:auto;bottom:0;transform-origin:0 100%}
.box1:hover:after,.box1:hover:before{transform:rotateZ(0)}
.box1 img{height:auto;transform:scale(1) rotate(0)}
.box1:hover img{filter:sepia(80%);transform:scale(1.3) rotate(10deg)}
.box1 .title{font-size:19px;font-weight:600;color:#fff;text-transform:uppercase;text-shadow:0 0 1px #004cbf;bottom:10px;left:10px;opacity:0;z-index:2;transform:scale(0);transition:all .5s ease .2s}
.box1:hover .title{opacity:1;transform:scale(1)}
.box1 .icon{padding:7px 5px;list-style:none;background:#004cbf;border-radius:0 0 0 10px;top:-100%;right:0;z-index:2;transition:all .3s ease .2s}
.box1:hover .icon{top:0}
.box1 .icon li{display:block;margin:10px 0}
.box1 .icon li a{display:block;width:35px;height:35px;line-height:35px;border-radius:10px;font-size:18px;color:#fff;transition:all .3s ease 0s}
.box2 .icon li a,.box3 .icon a:hover,.box4 .icon li a:hover,.box5 .icon li a,.box6 .icon li a{border-radius:50%}
.box1 .icon li a:hover{color:#fff;box-shadow:0 0 10px #000 inset,0 0 0 3px #fff}
@media only screen and (max-width:990px){.box1{margin-bottom:30px}
}
/*********************** Demo - 2 *******************/
.box2{position:relative}
.box2 img{width:100%;height:auto}
.box2 .box-content{width:100%;height:100%;position:absolute;top:50%;left:50%;z-index:2;transform:translate(-50%,-50%)}
.box2 .box-content:after,.box2 .box-content:before,.box2:after,.box2:before{content:"";width:80%;height:80%;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%) rotate(45deg);transition:all .5s ease 0s}
.box2:before{background:linear-gradient(45deg,rgba(0,0,0,.2) 49%,transparent 50%);left:-100%}
.box2:after{background:linear-gradient(45deg,transparent 49%,rgba(0,0,0,.2) 50%);left:160%}
.box2 .box-content:after,.box2 .box-content:before{width:65%;height:65%;background:linear-gradient(45deg,rgba(0,0,0,.3) 49%,transparent 50%);left:-100%;transition-delay:.1s}
.box1 .box-content:after{background:linear-gradient(45deg,transparent 49%,rgba(0,0,0,.3) 50%);left:160%}
.box2:hover .box-content:after,.box2:hover .box-content:before,.box2:hover:after,.box2:hover:before{left:50%}
.box2 .inner-content{width:50%;height:50%;color:#fff;padding:40px 0;position:absolute;top:50%;left:50%;z-index:2;transform:translate(-50%,-50%) scale(0);transition:all .3s ease .2s}
.box2 .inner-content:after{width:100%;height:100%;background:rgba(255,79,79,.8);position:absolute;top:50%;left:50%;z-index:-1;transform:translate(-50%,-50%) rotate(45deg)}
.box2:hover .inner-content{transform:translate(-50%,-50%) scale(1);transition:all .3s ease 0s}
.box2 .title{font-size:18px;font-weight:700;text-transform:uppercase;margin-bottom:5px}
.box2 .post{display:block;font-size:14px;text-transform:capitalize;margin-bottom:7px}
.box10 .title,.box11 .title,.box4 .title,.box5 .title,.box6 .box-content,.box7 .title{text-transform:uppercase}
.box2 .icon{padding:0;margin:0;list-style:none;transform:rotateY(360deg) scale(0);transition:all .3s ease 0s}
.box2:hover .icon{transform:rotateY(0) scale(1)}
.box2 .icon li{display:inline-block;margin:0 3px}
.box2 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:16px;color:#505050;transition:all .3s ease 0s}
.box2 .icon li a:hover{box-shadow:0 0 0 5px rgba(0,0,0,.5);background:#fff;color:#ff4f4f}
@media only screen and (max-width:990px){.box2{margin-bottom:30px}
}
@media only screen and (max-width:320px){.box2 .inner-content{padding:25px 0}
.box2 .title{font-size:16px}
}
/*********************** Demo - 3 *******************/
.box3{box-shadow:0 0 3px rgba(0,0,0,.3);position:relative}
.box3 .box-content,.box3:after,.box3:before{position:absolute;left:7%;right:7%;transition:all .3s}
.box3:after,.box3:before{display:block;background:rgba(0,0,0,.3);top:10%;bottom:10%;z-index:1;transform:scale(0,1)}
.box3:after{top:10.8%;bottom:10.8%;transform:scale(1,0)}
.box3:hover:after,.box3:hover:before{transform:scale(1);animation:animate 1.5s}
.box3:hover:before{border-top:3px solid #fff;border-bottom:3px solid #fff}
.box:hover:after{border-left:3px solid #fff;border-right:3px solid #fff}
.box img{width:100%;height:auto;transition:all .3s}
.box3:hover img{transform:scale(1.2);filter:blur(5px);-moz-filter:blur(5px);-webkit-filter:blur(5px)}
.box3 .box-content{padding:30px 10px;top:10%;bottom:10%;opacity:0;z-index:2}
.box3:hover .box-content{box-shadow:0 0 0 35px rgba(255,255,255,.3);opacity:1;transition:all .3s}
.box3 .title{font-size:24px;font-weight:600;color:#88c425;margin:0 0 5px}
.box3 .post{display:block;margin:0 0 5px;font-size:14px;color:rgba(255,255,255,.8)}
.box3 .description{font-size:14px;color:#fff;margin:0 0 20px}
.box3 .icon{padding:0;margin:0;list-style:none}
.box3 .icon li{display:inline-block;margin:0 10px 0 0}
.box3 .icon li a{display:block;width:30px;height:30px;line-height:30px;color:#fff;background:#88c425;transition:all .5s}
.box3 .icon a:hover{text-decoration:none;animation:animate-hover .5s;transition:all .3s}
@keyframes animate{0%,100%{opacity:1}
}
@keyframes animate-hover{0%{box-shadow:0 0 0 10px rgba(255,255,255,.3)}
50%{box-shadow:0 0 0 5px rgba(255,255,255,.3)}
100%{box-shadow:0 0 0 0 rgba(255,255,255,.3)}
}
.box10,.box11,.box12,.box14,.box4,.box5,.box6,.box7,.box9{box-shadow:0 0 3px rgba(0,0,0,.3)}
@media only screen and (max-width:990px){.box3{margin-bottom:30px}
.box3 .box-content{padding:10px}
.box3 .description{margin-bottom:10px}
}
@media only screen and (max-width:479px){.box3 .title{margin:0}
}

/*********************** Demo - 4 *******************/
.box4{position:relative}
.box4:before{width:0;height:200%;background:rgba(0,0,0,.5);position:absolute;top:0;left:-250px;bottom:0;transform:skew-36deg);transition:all .5s ease 0s}
.box4:hover:before{width:200%}
.box4 img{width:100%;height:auto}
.box4 .box-content{width:100%;height:100%;padding-top:20%;position:absolute;top:0;left:0;transform:scale(0);transition:all .3s ease 0s}
.box4 .icon,.box5 .icon{list-style:none;padding:0}
.box4:hover .box-content{transform:scale(1)}
.box4 .title{font-size:22px;font-weight:700;color:#fff;margin:0 0 10px}
.box4 .post{display:block;font-size:15px;font-weight:600;color:#fff;margin-bottom:20px}
.box4 .icon{margin:0}
.box4 .icon li{display:inline-block}
.box4 .icon li a{display:block;width:35px;height:35px;line-height:35px;font-size:20px;background:#fff;color:#ee4266;margin-right:10px;transition:all .3s ease 0s}
.box5 .icon,.box5 .icon li{display:inline-block}
@media only screen and (max-width:990px){.box4{margin-bottom:30px}
}
@media only screen and (max-width:767px){.box4:before{left:-400px}
.box4:hover:before{width:300%}
}

/*********************** Demo - 5 *******************/
.box5{background:#444;position:relative}
.box5:after,.box5:before{width:50px;height:50px;border-radius:50%;background:#10a5b8;position:absolute;top:-80px;left:15px;opacity:0;z-index:1;transition:all .35s ease}
.box5:after{top:auto;left:auto;bottom:-80px;right:15px}
.box5:hover:after,.box5:hover:before{opacity:.75;transform:scale(8);transition-delay:.15s}
.box5 img{width:100%;height:auto;transition:all .35s ease-out 0s}
.box5:hover img{opacity:.4}
.box5 .icon{margin:0;position:absolute;bottom:15px;right:15px;z-index:2;transform:scale(0);transition:all .35s ease-out}
.box5:hover .icon{transform:scale(1);transition-delay:.15s}
.box5 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:18px;color:#444;margin-right:10px;position:relative;transition:all .5s ease 0s}
.box5 .icon li a:hover{background:#444;color:#fff}
.box5 .box-content{padding:20px 15px;position:absolute;top:0;left:0;z-index:1}
.box5 .title{font-size:20px;font-weight:800;color:#fff;margin:0 0 5px;opacity:0;transform:translate(-20px,-20px);transition:all .35s ease-out}
.box5:hover .title{opacity:1;transform:translate(0,0);transition-delay:.15s}
.box5 .post{display:inline-block;font-size:16px;color:#fff;opacity:0;transform:translate(-20px,-20px);transition:all .35s ease-out}
.box5:hover .post{opacity:1;transform:translate(0,0);transition-delay:.15s}
.box6 .title,.box6 img,.box6:after{transition:all .35s ease 0s}
@media only screen and (max-width:990px){.box5{margin-bottom:30px}
}
/*********************** Demo - 6 *******************/
.box6{background:#000;position:relative}
.box6:after{background:rgba(0,0,0,.7);position:absolute;top:0;left:-30%;bottom:0;right:70%;transform:skew(20deg) translate-75%)}
.box6:hover:after{transform:skew(20deg) translate0)}
.box6 img{width:100%;height:auto}
.box6:hover img{opacity:.5}
.box6 .box-content{padding:20px;text-align:right;position:absolute;top:0;right:0;z-index:1}
.box6 .icon,.box7 .icon{padding:0;list-style:none}
.box10 .icon li a,.box11,.box12,.box13,.box14,.box6 .icon li a,.box7,.box7 .icon li a,.box8,.box8 .icon li a{text-align:center}
.box6 .title{font-size:20px;font-weight:900;color:#fff;margin:0 0 10px;transform:scale(0)}
.box6:hover .title{transform:scale(1)}
.box6 .icon li,.box6 .post{opacity:0;transform:translate40px);transition:all .35s ease 0s}
.box6 .post{display:block;font-size:14px;color:#fff;margin-bottom:5px}
.box6 .icon{display:inline-block;margin:0}
.box6:hover .icon li,.box6:hover .post{opacity:1;transform:translate0)}
.box6:hover .icon li:first-child{transition-delay:.1s}
.box6:hover .icon li:nth-child(2){transition-delay:.2s}
.box6 .icon li a{display:block;width:35px;height:35px;line-height:35px;background:#fff;font-size:18px;color:#605f5f;margin-bottom:5px;transition:all .35s ease}
.box6 .icon li a:hover{background:#605f5f;color:#fff}
@media only screen and (max-width:990px){.box6{margin-bottom:30px}
}


.box11{background:#000;color:#fff;position:relative}
.box11:after,.box11:before{position:absolute;content:""}
.box11:before{width:100%;height:100%;background:#83437d;opacity:.5;top:100%;left:0;z-index:1;transition:all .35s ease-in .3s}
.box11:hover:before{top:0;transition:all .35s ease-out 0s}
.box11:after{bottom:100%;left:50%;border-width:200px 200px 0;border-style:solid;border-color:#83437d transparent transparent;opacity:.9;transform:translate-50%);transition:all .35s ease-out 0s}
.box11:hover .post,.box11:hover .title{transform:translate(0,-50%)}
.box11:hover:after{bottom:25%;transition:all .35s ease-in .2s}
.box11 img{width:100%;height:auto}
.box11:hover img{opacity:.5}
.box11 .icon,.box11 .post,.box11 .title{width:100%;position:absolute;left:0;opacity:0;transition:all .35s ease .5s}
.box11 .box-content{width:100%;height:100%;position:absolute;top:0;left:0;z-index:1}
.box11 .title{padding:0 30px;margin:0;font-weight:300;top:45%}
.box11 .post,.box14 .post{text-transform:capitalize}
.box11 .post{font-size:15px;top:57%}
.box11 .icon{padding:0;margin:0;list-style:none;bottom:5px}
.box11 .icon li a{width:40px;height:40px;line-height:40px;padding:0 5px;font-size:20px;color:#fff;opacity:.7;transition:all .35s ease .5s}
.box11 .icon li a:hover{opacity:1;transition:all .35s ease}
.box11:hover .icon,.box11:hover .post,.box11:hover .title{opacity:1}
@media only screen and (max-width:990px){.box11{margin-bottom:20px}
}
@media only screen and (max-width:767px){.box11:after{border-width:500px 500px 0}
}




</style>
<div class="container mt-40">
            <h3 class="text-center">Hover Effect Style : Demo - 11</h3>
            <div class="row mt-30">
                <div class="col-md-4 col-sm-6">
                    <div class="box11">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo136/images/img-1.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Williamson</h3>
                            <span class="post">Web Developer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box11">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo136/images/img-2.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="box11">
                        <img src="http://bestjquery.com/tutorial/hover-effect/demo136/images/img-3.jpg" alt="">
                        <div class="box-content">
                            <h3 class="title">Kristiana</h3>
                            <span class="post">Web Designer</span>
                            <ul class="icon">
                                <li><a href="#" class="fa fa-search"></a></li>
                                <li><a href="#" class="fa fa-link"></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 