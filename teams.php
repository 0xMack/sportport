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
              <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="/loginregister.php">Login / Sign Up</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<section style=>
<h1>Teams</h1>
<?php

// $host    = "localhost";
// $user    = "root";
// $pass    = "root";
// $db_name = "sportportdb";

//create connection
//$conn = mysqli_connect($host, $user, $pass, $db_name);/**/

$conn=connect_db();

$leagueID = $_GET['leagueid'];
// $result = mysqli_query($conn,"SELECT TeamName FROM teams WHERE LeagueID=$leagueID");
$leagues = get_teams_byleague($conn, $leagueID);

foreach($teams as $team){
  echo ""
  $team["TeamName"]
}
// $all_property = array();

//echo $result;

$display_table_header = <<<_END
  <table class="table table-hover">
    <thead>
      <tr>
        <th>Team Name</th>
        <th></th>


      </tr>
    </thead>
    <tbody>
_END;



$display_table_footer = <<<_END
    </tbody>
  </table>
_END;



while ($property = mysqli_fetch_field($result)) {
array_push($all_property, $property->name);  //save those to array
}

echo $display_table_header;

while ($row = mysqli_fetch_array($result)) {
$LeagueID=$row['LeagueID'];
  echo "<tr>";
  foreach ($all_property as $item) {
      echo '<td>' . $row[$item] . '</td>'; //get items using property value
  }
  echo '</tr>';
}


echo $display_table_footer;





?>
</section>

    <footer class="copyright py-4 text-center text-white" id="footer">
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
    <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/freelancer.js"></script>

  </body>

</html>
