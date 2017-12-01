<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sport Port</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">



    <!-- Custom styles for this template -->
    <link href="css/freelancer.css" rel="stylesheet">

  </head>

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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="index.php#sports">Offered Sports</a>
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

  <section>
    <div class="Header" id="listHeader">
      <h2>Leagues</h2>
    </div>
      <?php
        $sport = $_GET['sport'];

            echo " <div class=\"info\" id=\"teamInfo\">
                    <div class='sportPicture col-md-6 col-lg-4'>
                        <a class='d-block mx-auto' href='leagues.php?sport=$sport'>
                            <img class='img-fluid' src='img/sports/$sport.png' alt='$sport'>
                            <div class='sport-caption d-flex position-absolute h-100 w-100'>
                                <h3>$sport</h3>
                            </div>
                        </a>
                    </div>
                   <h3>League Name</h3>
                   <table class=\"table\">
                      <thead>
                        <tr>
                            <th>Rank</th>
                            <th>Team Name</th>
                            <th></th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                            <th scope=\"row\">1</th>
                            <td>Dal CS</td>
                            <td><a href=\"team.php?teamid=1\" type=\"button\" class=\"btn btn-info\">Team info</a></td>
                        </tr>
                        <tr>
                            <th scope=\"row\">2</th>
                            <td>Geology Rocks!</td>
                            <td><a href=\"team.php?teamid=2\" type=\"button\" class=\"btn btn-info\">Team info</a></td>
                        </tr>
                        <tr>
                            <th scope=\"row\">3</th>
                            <td>Bob's Team</td>
                            <td><a href=\"team.php?teamid=3\" type=\"button\" class=\"btn btn-info\">Team info</a></td>
                        </tr>
                      </tbody>
                  </table>
                   </div>";
      ?>

  </section>

    <footer class="copyright py-4 text-center text-white"  id= "footer">
      <div class="container">
        <small>Copyright &copy; SportPort</small>
      </div>
    </footer>


    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-to-top d-lg-none position-fixed ">
      <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
        <i class="fa fa-chevron-up"></i>
      </a>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.min.js"></script>

  </body>

</html>
