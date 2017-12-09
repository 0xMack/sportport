<?php include('includes/header.php'); ?>
<div id="page">
    <section>
        <h1>My Teams</h1>
        <?php
        $conn = connect_db();
        $teams = get_teams($conn, null, $_SESSION['userID']);
        foreach($teams as $team) {
            $sportName = $team["SportName"];
            $leagueName = $team["LeagueName"];
            $leagueID = $team["LeagueID"];
            $teamID = $team["TeamID"];
            $teamName = $team["TeamName"];
            $roster = get_user_by_id($conn, $teamID);
            echo "
                <table id=\"main\">
                    <tr>
                        <th class=\"sport-image\" rowspan=\"3\"><img src=\"img/sports/$sportName.png\" alt=\"$sportName\" height=100 width=100></th>
                        <th>Sport: $sportName</th>
                        <th>League: $leagueName</th>
                        <th>Team: $teamName</th>
                        <th><a href='team.php?sport=$sportName&leagueid=$leagueID&teamid=$teamID' type='button' class='btn btn-info'>Team Info</a></th>
                    </tr>
                    <tr>
                        <td>
                            <table>
                                <tr>
                                  <th>Team Roster</th>
                                </tr>
                                ";
            foreach($roster as $player) {
                $playerName = $player["FirstName"];
                echo "
                                <tr>
                                  <td>$playerName</td>
                                </tr>
                    ";
            }
            echo "
                            </table>
                        </td>
                    </tr>
                </table>
                ";
        }
        ?>
    </section>
</div>

<?php include('includes/footer.php'); ?>
