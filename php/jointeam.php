<?php
    include_once('database.php');
    session_start();
    $conn = connect_db();
    $teamid = $_POST['team'];
    $userid = $_SESSION['userID'];
    join_Team($conn, $userid, $teamid);
    header("Location: ../myteams.php");

