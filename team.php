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
                </tr>
            </thead>
            <tbody>
            <?php
                $conn = connect_db();
                $sport_name = $_GET['sport'];
                $users = get_user_by_id($conn, $teamID);
                foreach($users as $user) {
                    $firstName = $user["FirstName"];
                    $lastName = $user["LastName"];
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
