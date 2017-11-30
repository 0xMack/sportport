<?php
/**
 * Created by PhpStorm.
 * User: mackp
 * Date: 2017-11-19
 * Time: 10:59 PM
 */

require_once('database.php');
require_once('dto/user.php');

function hash_password($password, $salt){
    return password_hash($password, PASSWORD_BCRYPT, ['salt' => $salt]);
}

function valid_creds($user, $password_attempt){
    $password_attempt = hash_password($password_attempt, $user->salt);
    $valid = ($password_attempt == $user->password);
    return $valid;
}

$conn = connect_db();
session_start();
$message = "Message is unchanged!";

if($_POST['formSubmit'] == "Register"){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $dob = $_POST['dateOfBirth'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    //TODO Do validation on these inputs on server side here
    if(user_exists($conn, $email)){
        $message = "There is already an account for the email you provided\n";
    }
    else{
        $user = new User($email, $firstName, $lastName, $dob);
        $user->init_password($password);
        if(create_user($conn, $user)){
            $message="Congratulations on your new account!";
            $_SESSION['loggedin'] = true;
            $_SESSION['userID'] = $user->userID;
            header("Location: ../profile.html");
        }
    }
}
else if($_POST['formSubmit'] == "Login"){
    $email_attempt = $_POST['loginEmail'];
    $password_attempt = $_POST['loginPassword'];
    $user = get_user_by_email($conn, $email_attempt);

    if($user != null && valid_creds($user, $password_attempt)){
        $_SESSION['loggedin'] = true;
        $_SESSION['userID'] = $user->userID;
        header("Location: ../profile.html");
    }
    else{
        $message = "Invalid Credentials!";
    }
}
else if($_POST['formSubmit'] == "Sign Out"){
    if(session_destroy()){
        $message = "Session has been terminated";
    }
    else{
        $message = "Error terminating session!";
    }
}

echo $message

?>