<?php include('includes/header.php'); ?>

<section id="Leagues">
    <div class="jumbotron" id="LeaguesHeader">
        <h2>Team</h2>
    </div>
    <div class="info">
        <table class="table">
            <thead>
                <tr>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>
                      <form method="post">
                        <input name='joinTeam' type='button' class='btn btn-info' value="Join">
                      </form>
                    </th>
                </tr>
            </thead>
            <tbody>
            <?php
                $conn = connect_db();
                $sport_name = $_GET['sport'];
                $players = get_user_by_id($conn, $teamID);
                foreach($players as $player) {
                    $firstName = $player["FirstName"];
                    $lastName = $player["LastName"];
                    echo "<tr>
                            <td>$firstName</td>
                            <td>$lastName</td>
                          </tr>";
                }
            ?>
            </tbody>
        </table>
    </div>
</section>

<?php include('includes/footer.php'); ?>
