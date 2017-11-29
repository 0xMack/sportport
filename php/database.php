<?php
/**
 * Created by PhpStorm.
 * User: mackp
 * Date: 2017-11-23
 * Time: 8:12 PM
 */

function connect_db(){
    // db configuration
    $configs = include('config.php');
    $db_hostname = $configs['hostname'];
    $db_username = $configs['username'];
    $db_password = $configs['password'];
    $db_name = $configs['dbname'];

    try {
        $conn = new PDO("mysql:host=$db_hostname;dbname=$db_name", $db_username, $db_password);
        // set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $conn;
    } catch (PDOException $e) {
        die("Unable to connect to the database!\n");
    }
}
function user_db_to_dto($user_db){
    $user_dto = new User($user_db['Email'], $user_db['FirstName'], $user_db['LastName'], $user_db['DateOfBirth']);
    $user_dto->userID = trim($user_db['UserID']);
    $user_dto->password = trim($user_db['PasswordHash']);
    $user_dto->salt = trim($user_db['Salt']);
    return $user_dto;
}
function get_user_by_email($conn, $email){
    $stmt = $conn->prepare("SELECT * from users WHERE Email=?");
    $stmt->execute([$email]);
    $users = $stmt->fetchAll();
    assert(sizeof($users) < 2);
    if(sizeof($users) == 1){
        return user_db_to_dto($users[0]);
    }
    else{
        return null;
    }
}
//function get_user_by_id($conn, $userID){
//    $stmt = $conn->prepare("SELECT * from users WHERE UserID=?");
//    $stmt->execute([$userID]);
//    return $stmt->fetchAll();
//}

function user_exists($conn, $email){
    $user = get_user_by_email($conn, $email);
    if($user == null){ return false; }
    else{ return true; }
}

function create_user($conn, $user){

    $stmt = $conn->prepare("INSERT INTO users (Email, LastName, FirstName, PasswordHash, Salt, DateOfBirth) VALUES (?, ?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $user->email);
    $stmt->bindParam(2, $user->lastName);
    $stmt->bindParam(3, $user->firstName);
    $stmt->bindParam(4, $user->password);
    $stmt->bindParam(5, $user->salt);
    $stmt->bindParam(6, $user->dob);
    return $stmt->execute();
}