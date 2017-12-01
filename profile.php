<?php include('includes/header.php'); ?>

<div id="page">
    <section style="margin-top:50px;
                /*margin-right: 140px;*/
                /*margin-left: 140px;*/
                background-color:seagreen;">
        <div style="">
            <img src ="img/profilePic.png" alt="profilePic" width="175" height="175" style="float: left; margin-right: 20px; position: relative; left:10px; border: 1px solid black; border-radius: 50%">
            <?php
                echo "<h1 style='color:white;'>$firstName $lastName</h1>";
            ?>
            <img src="img/Male.png" alt="male" width="30" height="30">
            <div style="color: whitesmoke">

                <p style="float: left; margin-right: 20px;">Age: 23</p>
                <p style="float: left; margin-right: 20px;">Height: 5.6</p>
                <p>Game played: 123</p>
                <p style="float: left; margin-right: 5px;">Favourite Sport: </p>
                <img src="img/sports/soccer.png" width="30" height="30">


                <hr class="star-light">
            </div>
            <div>
                <img src="img/Team.png" width="100" height="100" >
                <a href="myteams.php" style=" font: italic bold 12px/30px Georgia, serif;float:inherit; font-size: 20px;link {color: cornflowerblue;
    background-color: transparent;
    text-decoration: none;}   "> &#9830; My Team</a>
                <img src="img/cup.png" width="100" height="100" style="margin-left: 400px;">
                <a href="leagues.php?sport=soccer" style=" font: italic bold 12px/30px Georgia, serif;float:inherit; font-size: 20px;link {color: cornflowerblue;
    background-color: transparent;
    text-decoration: none;}   "> &#9830; Leagues</a>
            </div>
        </div>
<!--    </section>-->
<div>
<?php include('includes/footer.php'); ?>
