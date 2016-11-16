<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/> <!--320-->
    <title>Playcraft Postcard Promotion</title>
    <!-- CSS FILES -->
    <link href="_/css/bootstrap.min.css" rel="stylesheet">
    <link href="_/css/styles.css" rel="stylesheet">
    <link href="_/css/formValidation.min.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-84698003-1', 'auto');
      ga('send', 'pageview');

    </script>
  </head>
  <body>
    <!-- ========BEGIN HEADER CONTENT======== -->
    <?php $activePage = ""; ?>
    <!--header includes: Logo, navigation, and red line below header-->
    <?php include 'includes/header.php' ?>

    <!-- ========BEGIN MAIN BODY CONTENT======== -->
    <div id="body-content" class="container-fluid">
      <div class="row">
        <!-- ===PASSPORT TAGLINE=== -->
        <div class="col-md-3">
          <img class="tagline" src="img/passport.png" alt="Playcraft Systems Passport Promo" />
        </div><!--end .col-md-3-->
        <div class="col-md-9">
          <blockquote>
            <p>Playcraft Passport is your ticket to amazing destinations where imaginations run wild and dreams come true</p>
          </blockquote>
        </div><!--end .col-md-9-->
      </div><!--end .row-->
      <?php include 'includes/postcards.php' ?>
      </div><!--end .row-->
    </div><!--end .container-fluid-->

    <!-- ========BEGIN FOOTER CONTENT======== -->
    <!--footer includes: sub tagline, address, contact a distributor and view catalog-->
    <?php include 'includes/footer.php' ?>

    <!-- ========BEGIN SIGNUP MODAL======== -->
    <!--signup includes the initial popup form asking for name, number and email-->
    <?php //include 'includes/modal-form.php' ?>

    <!-- ===BEGIN FIND REP MODAL=== -->
    <!--findrep includes the tool for finding a local distributor-->
    <?php include 'includes/modal-findrep.php' ?>

    <!-- JAVASCRIPT FILES -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-cookie/1.4.0/jquery.cookie.min.js"></script>
    <script src="_/js/formValidation.js"></script>
    <script src="_/js/bootstrap.min.js"></script>
    <script src="_/js/bootstrap.js"></script>
    <script src="_/js/script.js"></script>
    <script src="https://use.typekit.net/jdu7hfu.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>
  </body>
</html>
