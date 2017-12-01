<?php include "includes/header.php"; ?>

  <body id="page-top">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Sport Port</a>
        <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#portfolio">Offered Sports</a>
            </li>
<!--             <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#about"></a>
            </li> -->
            <li class="nav-item mx-0 mx-lg-1">
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="loginregister.php">Login / Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/football.jpg" alt="soccer picture">
        <h1 class="text-uppercase mb-0">Sport Port</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Join Leagues - Make Teams - Keep Track of Your Stats</h2>
      </div>
    </header>

    <!-- Portfolio Grid Section -->
    <section class="portfolio" id="portfolio">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">Offered Sports</h2>
        <hr class="star-dark mb-5">
        <div class="row">
            <?php
                $sports = ['soccer', 'basketball', 'baseball', 'volleyball', 'hockey', 'lacrosse'];
                foreach($sports as $sport) {
                    echo "  <div class='col-md-6 col-lg-4'>
                                <a class='d-block mx-auto' href='leagues.php?sport=$sport'>
                                    <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                                    <div class='sport-caption d-flex position-absolute h-100 w-100'>
                                        <h3>$sport</h3>
                                    </div>
                                </a>
                            </div>";
                }
            ?>
        </div>
      </div>
    </section>

 <?php include "includes/footer.php"; ?>
