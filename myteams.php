<?php include('includes/header.php'); ?>
<div id="page">
    <section>
        <h1>My Teams</h1>
        <?php $teams=get_teams(null, $_SESSION['userID']); print_r($teams);
        foreach($teams as $team) {
            echo "
                <table id=\"main\">
                    <tr>
                        <th rowspan=\"3\"><img src=\"img/sports/\"".$team["SportName"]." </th>
                        <th>".$team["SportName"]."</th>
                        <th>".$team["LeagueName"]."</th>
                    </tr>
                </table>";
        }
        ?>
        <table id="main">
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
</div>

<?php include('includes/footer.php'); ?>
