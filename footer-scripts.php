<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- prospect page end -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">

<!-- SCRIPTS -->
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script defer type="text/javascript" src="js/popper.min.js"></script>
<script async type="text/javascript" src="js/bootstrap.min.js"></script>
<script defer type="text/javascript" src="js/mdb.min.js"></script>
<script defer type="text/javascript">
// Animations initialization
  //new WOW().init();
  $(function () {
    $(document).scroll(function () {
      var $nav = $(".navbar-dark");
      $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});
</script>
<link rel="stylesheet" type="text/css" href="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.css">
<script defer type="text/javascript" src="https://rawgit.com/alvarotrigo/fullPage.js/dev/src/fullpage.js"></script>
<script defer type="text/javascript" src="js/yell.min.js"></script>

<style type="text/css">
  html {
    scroll-behavior: smooth;
  }
  .navbar-dark.scrolled {
    background-color: #fff !important;
    transition: background-color 200ms linear;
  }
</style>