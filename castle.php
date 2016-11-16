<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Castle Theme</title>
    <!-- CSS FILES -->
    <link href="_/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="_/css/styles.css">
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
    <?php $activePage = "castle"; ?>
    <?php include 'includes/header.php' ?>
    <!-- ======== END HEADER CONTENT======== -->

    <!-- ========BEGIN BODY CONTENT======== -->
    <div id="body-content2" class="container-fluid">
      <div class="row">
        <!-- ===PASSPORT TAGLINE=== -->
        <div class="col-md-3">
          <img class="tagline" src="img/passport.png" alt="" />
        </div>
      </div>
      <div class="row">
        <!-- ===THEME INFORMATION TAGLINE=== -->
        <div class="col-md-4">
          <div class="white-strip margin-rocket">
            <p class="castle-desc">
              <span><strong>PC-9501 R5</strong></span><br>
              <span><strong>Castle Theme</strong></span><br>
              <span><strong>Play System</strong></span><br>
              <span class="price-bold">$74,699</span><br>
              <span class="red-bold">BUY THIS</span><br><br>
              <span class="triangle1"></span>
            </p>
          </div>
            <img class="castle-item" src="img/castle-theme.png" alt="" />
        </div>
        <!-- ===THEME IMAGE=== -->
        <div class="col-md-4">
          <div class="white-strip margin-rocket">
            <p class="western-free-desc">
              <span><strong>PC-2272-90</strong></span><br>
              <span><strong>Boulder Stacks</strong></span><br>
              <span><strong>90"</strong></span><br>
              <span class="price-bold strike">$7,805</span><br>
              <span class="red-bold">GET THIS FREE!</span><br><br>
              <span class="triangle2"></span>
            </p>
          </div>
            <img class="castle-free" src="img/castle-free.png" alt="" />
        </div>
        <!-- ===THEME IMAGE=== -->
        <div class="col-md-4">
          <div class="white-strip">
            <div class="theme-long-desc">
              <span class="title tk-serifa">CASTLE THEME</span>
              <p>Our Castle is a damsels dream with three towers, two twister slides and multiple climbers.</p>
              <span><strong>Designed for Ages:</strong> 5-12 years</span><br>
              <span><strong>Capacity:</strong> 81-85 Children</span><br>
              <span><strong>Size:</strong> 35' x 19' (10.7m x 5.8m)</span><br>
              <span><strong>Use Zone:</strong> 47' x 31' (14.3m x 9.5m)</span><br>
            </div>
          </div>
          <!-- ===BUTTONS=== -->
          <div class="button-group">
            <a href="img/castle-specs.pdf" class="btn btn-red btn-lg" target="_blank" onClick="ga('send', 'event', 'Castle Spec Button', 'click', 'Passport Promo');">Specifications</a><br>
            <a href="http://www.playcraftsystems.com/products/catalog2016/#41" class="btn btn-red btn-lg" target="_blank" onClick="ga('send', 'event', 'Castle Catalog Button', 'click', 'Passport Promo');">Catalog</a><br>
            <?php include 'includes/buttons.php' ?>
          </div>
        </div>
      </div>
    </div>

    <!-- ========BEGIN FOOTER CONTENT======== -->
    <?php include 'includes/footer.php' ?>
    <!-- ========END FOOTER CONTENT======== -->

    <!-- ===BEGIN MODAL POPUP=== -->
    <?php include 'includes/modal-findrep.php' ?>
    <?php include 'includes/modal-legal.php' ?>
    <!-- ===END MODAL POPUP=== -->

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
