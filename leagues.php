<?php include('includes/header.php'); ?>

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

<?php include('includes/footer.php'); ?>
