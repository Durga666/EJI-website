<?php include('header.php');   ?>
<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/popper.min.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/mdb.min.js"></script>
<script type="text/javascript">
new WOW().init();
</script>
<br><br><br><br><br><br>

<div class="container" >

	<h1 style="font-family: 'Yu Gothic Light';text-align: center;font-weight: 600;" >EMERALD BELIEVES IN MAKING YOUR DREAM PRODUCT</h1>
	<br>
	<h2 style="font-family: 'Quicksand';text-align: center;" >EMERALD BELIEVES IN MAKING YOUR DREAM PRODUCT</h2>

	<br><br>

		<div id="video-carousel-example2" class="carousel slide carousel-fade" data-ride="carousel">
		<div class="carousel-inner" role="listbox">
		<div class="carousel-item active">
		<div class="view" style="width: 1050px;height: 354px;"  >
		<video class="video-fluid" autoplay loop muted>
		<source src="https://mdbootstrap.com/img/video/Lines.mp4" type="video/mp4" />
		</video>
		<div class="mask rgba-indigo-light"></div>
		</div>
		<div class="carousel-caption">
		<div class="animated fadeInDown">
		</div>
		</div>
		</div>
		</div>
		</div>

	<br><br>


	<br><br>


<div class="file-upload-wrapper"  >
  <input type="file" id="input-file-now-custom-1" class="file-upload"  />
</div>

	<br><br>


	<h2 style="font-family: 'Quicksand';" >CUSTOMISATION REQUIRES BETTER UNDERSTANING OF YOUR NEEDS</h2>

	<br>

	<p style="font-family: 'Quicksand';text-align: center;font-size: 45px;" >we'd love to talk you.</p>
<br><br>


	
</div>





<?php include('footer.php'); ?>

<script type="text/javascript" src="https://mdbootstrap.com/wp-content/themes/mdbootstrap4/js/plugins/mdb-file-upload.min.js" ></script>
<script type="text/javascript">
$('.file-upload').file_upload();

</script>

	<style type="text/css"> 
 .file-upload {
    display: -webkit-box;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -webkit-justify-content: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    position: relative;
    cursor: pointer;
    overflow: hidden;
    width: 1050px;
    max-width: 100%;
    height: 280px;
    padding: 5px 10px;
    font-size: 1rem;
    text-align: center;
    color: #ccc
  }

  .file-upload-wrapper .card.card-body.has-error .file-upload-message .file-upload-error,
  .file-upload-wrapper .card.card-body.has-preview .btn.btn-sm.btn-danger {
    display: block
  }

  .file-upload i {
    font-size: 3rem
  }

  .file-upload .mask.rgba-stylish-slight {
    opacity: 0;
    -webkit-transition: all .15s linear;
    -o-transition: all .15s linear;
    transition: all .15s linear
  }

  .file-upload:hover .mask.rgba-stylish-slight {
    opacity: .8
  }

  .file-upload-wrapper .card.card-body.has-error {
    border-color: #f34141
  }

  .file-upload-wrapper .card.card-body.has-error:hover .file-upload-errors-container {
    visibility: visible;
    opacity: 1;
    -webkit-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
  }

  .file-upload-wrapper .card.card-body.disabled input {
    cursor: not-allowed
  }

  .file-upload-wrapper .card.card-body.disabled:hover {
    background-image: none;
    -webkit-animation: none;
    animation: none
  }

  .file-upload-wrapper .card.card-body.disabled .file-upload-message {
    opacity: .5;
    text-decoration: line-through
  }

  .file-upload-wrapper .card.card-body.disabled .file-upload-infos-message {
    display: none
  }

  .file-upload-wrapper .card.card-body input {
    position: absolute;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    height: 100%;
    width: 100%;
    opacity: 0;
    cursor: pointer;
    z-index: 5
  }

  .file-upload-wrapper .card.card-body .file-upload-message {
    position: relative;
    top: 50px;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
  }

  .file-upload-wrapper .card.card-body .file-upload-message span.file-icon {
    font-size: 50px;
    color: #ccc
  }

  .file-upload-wrapper .card.card-body .file-upload-message p {
    margin: 5px 0 0
  }

  .file-upload-wrapper .card.card-body .file-upload-message p.file-upload-error {
    color: #f34141;
    font-weight: 700;
    display: none
  }

  .file-upload-wrapper .card.card-body .btn.btn-sm.btn-danger {
    display: none;
    position: absolute;
    opacity: 0;
    z-index: 7;
    top: 10px;
    right: 10px;
    -webkit-transition: all .15s linear;
    -o-transition: all .15s linear;
    transition: all .15s linear
  }

  .file-upload-wrapper .card.card-body .file-upload-preview {
    display: none;
    position: absolute;
    z-index: 1;
    background-color: #fff;
    padding: 5px;
    width: 100%;
    height: 100%;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    overflow: hidden;
    text-align: center
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-preview-img {
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: border-color .15s linear;
    -o-transition: border-color .15s linear;
    transition: border-color .15s linear;
    -o-object-fit: cover;
    object-fit: cover
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render i {
    font-size: 80px;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    position: absolute;
    color: #777
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-render .file-upload-extension {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    -ms-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    margin-top: 10px;
    text-transform: uppercase;
    font-weight: 900;
    letter-spacing: -.03em;
    font-size: 1rem;
    color: #fff;
    width: 42px;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    background: rgba(0, 0, 0, .7);
    opacity: 0;
    -webkit-transition: opacity .15s linear;
    -o-transition: opacity .15s linear;
    transition: opacity .15s linear
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner {
    position: absolute;
    top: 50%;
    -webkit-transform: translate(0, -40%);
    -ms-transform: translate(0, -40%);
    transform: translate(0, -40%);
    -webkit-backface-visibility: hidden;
    backface-visibility: hidden;
    width: 100%;
    padding: 0 20px;
    -webkit-transition: all .2s ease;
    -o-transition: all .2s ease;
    transition: all .2s ease
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p {
    padding: 0;
    margin: 0;
    position: relative;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    color: #fff;
    text-align: center;
    line-height: 25px;
    font-weight: 700
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message {
    margin-top: 15px;
    padding-top: 15px;
    font-size: 12px;
    position: relative;
    opacity: .5
  }

  .file-upload-wrapper .card.card-body .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before {
    content: "";
    position: absolute;
    top: 0;
    left: 50%;
    -webkit-transform: translate(-50%, 0);
    -ms-transform: translate(-50%, 0);
    transform: translate(-50%, 0);
    background: #fff;
    width: 30px;
    height: 2px
  }

  .file-upload-wrapper .card.card-body:hover .btn.btn-sm.btn-danger,
  .file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos {
    opacity: 1
  }

  .file-upload-wrapper .card.card-body:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner {
    margin-top: -5px
  }

  .file-upload-wrapper .card.card-body.touch-fallback {
    height: auto !important
  }

  .file-upload-wrapper .card.card-body.touch-fallback:hover {
    background-image: none;
    -webkit-animation: none;
    animation: none
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview {
    position: relative;
    padding: 0
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render {
    display: block;
    position: relative
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message::before,
  .file-upload-wrapper .card.card-body.touch-fallback.has-preview .file-upload-message {
    display: none
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file {
    position: relative;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    top: 0;
    left: 0
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render .file-upload-font-file::before {
    margin-top: 30px;
    margin-bottom: 30px
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-render img {
    position: relative;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0)
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos {
    position: relative;
    opacity: 1;
    background: 0 0
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner {
    position: relative;
    top: 0;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    padding: 5px 90px 5px 0
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p {
    padding: 0;
    margin: 0;
    position: relative;
    width: 100%;
    white-space: nowrap;
    overflow: hidden;
    -o-text-overflow: ellipsis;
    text-overflow: ellipsis;
    color: #777;
    text-align: left;
    line-height: 25px
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-preview .file-upload-infos .file-upload-infos-inner p.file-upload-infos-message {
    margin-top: 0;
    padding-top: 0;
    font-size: 18px;
    position: relative;
    opacity: 1
  }

  .file-upload-wrapper .card.card-body.touch-fallback .file-upload-message {
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
    padding: 40px 0
  }

  .file-upload-wrapper .card.card-body.touch-fallback .btn.btn-sm.btn-danger {
    top: auto;
    bottom: 23px;
    opacity: 1
  }

  .file-upload-wrapper .card.card-body.touch-fallback:hover .file-upload-preview .file-upload-infos .file-upload-infos-inner {
    margin-top: 5rem
  }

  .file-upload-wrapper .card.card-body .file-upload-loader {
    position: absolute;
    top: 15px;
    right: 15px;
    display: none;
    z-index: 9
  }

  .file-upload-wrapper .card.card-body .file-upload-loader::after {
    display: block;
    position: relative;
    width: 20px;
    height: 20px;
    -webkit-animation: rotate .6s linear infinite;
    animation: rotate .6s linear infinite;
    -webkit-border-radius: 100%;
    border-radius: 100%;
    border-top: 1px solid #ccc;
    border-bottom: 1px solid #777;
    border-left: 1px solid #ccc;
    border-right: 1px solid #777;
    content: ""
  }

  .file-upload-wrapper .card.card-body .file-upload-errors-container {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    z-index: 3;
    background: rgba(243, 65, 65, .8);
    text-align: left;
    visibility: hidden;
    opacity: 0;
    -webkit-transition: visibility 0s linear .15s, opacity .15s linear;
    -o-transition: visibility 0s linear .15s, opacity .15s linear;
    transition: visibility 0s linear .15s, opacity .15s linear
  }

  .file-upload-wrapper .card.card-body .file-upload-errors-container ul {
    padding: 10px 20px;
    margin: 0;
    position: absolute;
    left: 0;
    top: 50%;
    -webkit-transform: translateY(-50%);
    -ms-transform: translateY(-50%);
    transform: translateY(-50%)
  }

  .file-upload-wrapper .card.card-body .file-upload-errors-container ul li {
    margin-left: 20px;
    color: #fff;
    font-weight: 700
  }

  .file-upload-wrapper .card.card-body .file-upload-errors-container.visible {
    visibility: visible;
    opacity: 1;
    -webkit-transition-delay: 0s;
    -o-transition-delay: 0s;
    transition-delay: 0s
  }

  .file-upload-wrapper .card.card-body~.file-upload-errors-container ul {
    padding: 0;
    margin: 15px 0
  }

  .file-upload-wrapper .card.card-body~.file-upload-errors-container ul li {
    margin-left: 20px;
    color: #f34141;
    font-weight: 700
  }

  @-webkit-keyframes rotate {
    0% {
      -webkit-transform: rotateZ(-360deg);
      transform: rotateZ(-360deg)
    }

    100% {
      -webkit-transform: rotateZ(0);
      transform: rotateZ(0)
    }
  }

  @keyframes rotate {
    0% {
      -webkit-transform: rotateZ(-360deg);
      transform: rotateZ(-360deg)
    }

    100% {
      -webkit-transform: rotateZ(0);
      transform: rotateZ(0)
    }
  }
</style>
	</style>