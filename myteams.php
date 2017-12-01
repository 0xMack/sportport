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
  <style>

      table#main{
          border: 5px solid black
      }
      th {
          text-align: left;
      }
  </style>
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
    <h1>My Teams</h1>
    <table style="width:100%" id="main">
      <tr>
        <th rowspan="3"><img src="img/sports/soccer.png" alt="soccer" height=100 width=100></th>
        <th>Soccer</th>
        <th>Dalhousie Intramurals</th>
      </tr>
      <tr>
        <td>Recreational</td>
        <td>Next Game: TBA</td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <th>Team Roster</th>
            </tr>
            <tr>
              <td>Bob</td>
            </tr>
            <tr>
              <td>Suzie</td>
            </tr>
            <tr>
              <td>Sarah</td>
            </tr>
            <tr>
              <td>Jim</td>
            </tr>
            <tr>
              <td>Tom</td>
            </tr>
            <tr>
              <td>Dennis</td>
            </tr>
          </table>
        </td>
        <td>
          <table>
            <tr>
              <th>Captain</th>
            </tr>
            <tr>
              <td>Bob</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
    <br/>
    <table style="width:100%" id="main">
      <tr>
        <th rowspan="3"><img src="img/sports/basketball.png" alt="basketball" height=100 width=100></th>
        <th>Basketball</th>
        <th>Dalhousie Intramurals</th>
      </tr>
      <tr>
        <td>Recreational</td>
        <td>Next Game: TBA</td>
      </tr>
      <tr>
        <td>
          <table>
            <tr>
              <th>Team Roster</th>
            </tr>
            <tr>
              <td>Bob</td>
            </tr>
            <tr>
              <td>Suzie</td>
            </tr>
            <tr>
              <td>Sarah</td>
            </tr>
            <tr>
              <td>Jim</td>
            </tr>
            <tr>
              <td>Tom</td>
            </tr>
            <tr>
              <td>Dennis</td>
            </tr>
          </table>
        </td>
        <td>
          <table>
            <tr>
              <th>Captain</th>
            </tr>
            <tr>
              <td>Bob</td>
            </tr>
          </table>
        </td>
      </tr>
    </table>
</section>

<?php include('includes/footer.php'); ?>