<?php include('includes/header.php'); ?>

    <section id="Leagues">
        <div class="jumbotron" id="LeaguesHeader">
            <h2>Leagues</h2>
        </div>
        <div class="info">
            <table class="table">
                <thead>
                    <tr>
                        <th>Sport</th>
                        <th>League Name</th>
                        <th>League Info</th>
                        <th>Create Team</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    $conn = connect_db();
                    $sport_name = $_GET['sport'];
                    $leagues = get_leagues($conn, $sport_name, null);
                    foreach($leagues as $league) {
                        $league_name = $leagues[""];
                        echo "<tr>
                              <td><div class='sportPicture col-md-1 col-lg-1'><img class='img-fluid' src='img/sports/$sport_name.png' alt='$sport_name'></div></td>
                              <td>$sport</td>
                              <td><a href='team.php?teamid=1' type='button' class='btn btn-info'>League Info</a></td>
                              <td><a href='team.php?teamid=1' type='button' class='btn btn-info'>Create Team</a></td>
                          </tr>";
                    }
                ?>
                </tbody>
            </table>
        </div>
    </section>

<?php include('includes/footer.php'); ?>
