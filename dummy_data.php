<?php
    require_once('php/dto/user.php');
    require_once('php/database.php');
    $conn = connect_db();
    $max_users = 31;
    // Create dummy users
    for($i = 10; $i < $max_users; $i++){
        $user = new User("e{$i}@gmail.com", "first{$i}", "last{$i}", "1994/05/{$i}");
        $user->init_password("pass{$i}");
//        create_user($conn, $user);
        $user_ids[$i] = get_user_by_email($conn, "e{$i}@gmail.com")->userID;
    }

    // Create dummy sports
    $sports = array("Soccer", "Basketball", "Baseball", "Volleyball", "Hockey", "Lacrosse");
    $sport_ids = array();
    for($i = 0; $i < sizeof($sports); $i++){
//        create_sport($conn, $sports[$i]);
    }
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            // Create dummy leagues
//            create_league($conn, "{$sports[$i]}_L{$j}", $j + 1);
        }
    }
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            for ($k = 0; $k < 4; $k++) {
                // Create dummy teams
//                create_team($conn, "{$sports[$i]}_L{$j}_T{$k}", $k + 1);
            }
        }
    }

    $user_idx = 10;
    for($i = 0; $i < sizeof($sports); $i++){
        for($j = 0; $j < 4; $j++) {
            for ($k = 0; $k < 4; $k++) {
                // Create dummy teams
                if($user_idx > $max_users-10) {
                    break;
                }
                create_team_membership($conn, $k + 1, $user_idx);
                $user_idx++;
            }
        }
    }
