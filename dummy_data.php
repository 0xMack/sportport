<?php
    require_once('php/dto/user.php');
    require_once('php/database.php');
    $conn = connect_db();

    // Create dummy users
    $users_info = array(
                        array('e1@gmail.com', 'e2@gmail.com', 'e3@gmail.com', 'e4@gmail.com'),
                        array('first1', 'first2', 'first3', 'first4'),
                        array('last1', 'last2', 'last3', 'last4'),
                        array("1990/06/30", "1991/03/01", "1903/06/30", "1999/07/10"));
    $user_pass = ["pass1", "pass2", "pass3", "pass4"];
    $user_ids = array();
    for($i = 0; $i < sizeof($users_info); $i++){
        $user = new User($users_info[0][$i], $users_info[1][$i], $users_info[2][$i], $users_info[3][$i]);
        $user->init_password($user_pass[$i]);
        create_user($conn, $user);
        $user_ids[$i] = get_user_by_email($conn, $users_info[0][$i])->userID;
    }

    // Create dummy sports
    $sports = array("Soccer", "Basketball", "Baseball", "Volleyball", "Hockey", "Lacrosse");
    $sport_ids = array();
    for($i = 0; $i < sizeof($sports); $i++){
        create_sport($conn, $sports[$i]);
    }
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            // Create dummy leagues
            create_league($conn, "{$sports[$i]}_L{$j}", $j + 1);
        }
    }
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            for ($k = 0; $k < 4; $k++) {
                // Create dummy teams
                create_team($conn, "{$sports[$i]}_L{$j}_T{$k}", $k + 1);
            }
        }
    }
