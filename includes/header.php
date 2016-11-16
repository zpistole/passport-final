<div class="container-fluid whiteBack">
    <div class="row">
      <!-- ===LOGO=== -->
      <div class="col-md-3">
        <a href="index.php" class="logo">
          <img src="img/pc-logo-lg.png" alt="">
        </a>
      </div>
      <!-- ===NAVIGATION=== -->
      <div class="col-md-9">
        <nav class="navbar navbar-default">
          <div class="container-fluid">
            <!-- ===MOBILE NAV=== -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
            </div>
            <!-- ===MAIN NAV=== -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
              <ul class="nav navbar-nav">
                <li class="rocket <?php if ($activePage =="rocket") {?>selected <?php } ?>">
                  <a href="rocket.php" onClick="ga('send', 'event', 'Rocket Nav', 'click', 'Passport Promo');">Rocket</a>
                </li>
                <li class="western <?php if ($activePage =="western") {?>selected <?php } ?>">
                  <a href="western.php" onClick="ga('send', 'event', 'Western Nav', 'click', 'Passport Promo');">Western</a>
                </li>
                <li class="train <?php if ($activePage =="locomotive") {?>selected <?php } ?>">
                  <a href="locomotive.php" onClick="ga('send', 'event', 'Train Nav', 'click', 'Passport Promo');">Locomotive</a>
                </li>
                <li class="pirate <?php if ($activePage =="pirate") {?>selected <?php } ?>">
                  <a href="pirate.php" onClick="ga('send', 'event', 'Pirate Nav', 'click', 'Passport Promo');">Pirate</a>
                </li>
                <li class="castle <?php if ($activePage =="castle") {?>selected <?php } ?>">
                  <a href="castle.php" onClick="ga('send', 'event', 'Castle Nav', 'click', 'Passport Promo');">Castle</a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
</div>
<!-- ===HEADER BORDER=== -->
<div class="container-fluid">
  <div class="row">
    <div class="logo-border"></div>
  </div>
</div>
