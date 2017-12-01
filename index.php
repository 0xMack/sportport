<?php include('includes/header.php'); ?>


    <!-- Header -->
    <header class="masthead bg-primary text-white text-center">
      <div class="container">
        <img class="img-fluid mb-5 d-block mx-auto" src="img/football.jpg" alt="soccer picture">
        <h1 class="text-uppercase mb-0">Sport Port</h1>
        <hr class="star-light">
        <h2 class="font-weight-light mb-0">Join Leagues - Make Teams - Keep Track of Your Stats</h2>
      </div>
    </header>
    <?php
        echo $loggedin;
    ?>
    <!-- Sports Grid Section -->
    <section class="sports" id="sports">
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

    <!-- Index Footer -->
    <footer class="footer text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Location</h4>
            <p class="lead mb-0">Straight Outta Dartmouth
              <br></p>
          </div>
          <div class="col-md-4 mb-5 mb-lg-0">
            <h4 class="text-uppercase mb-4">Around the Web</h4>
            <ul class="list-inline mb-0">
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-google-plus"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-linkedin"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a class="btn btn-outline-light btn-social text-center rounded-circle" href="#">
                  <i class="fa fa-fw fa-dribbble"></i>
                </a>
              </li>
            </ul>
          </div>
          <div class="col-md-4">
            <h4 class="text-uppercase mb-4">About Group 4</h4>
            <p class="lead mb-0">We are pretty sure we are group 4.</p>
          </div>
        </div>
      </div>
    </footer>

<?php include('includes/footer.php'); ?>