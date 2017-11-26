<?php

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
        echo "Connected to database successfully\n";
        return $conn;
    } catch (PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
        die("Unable to connect to the database!\n");
    }
}

function get_user_by_email($conn, $email){
    $stmt = $conn->prepare("SELECT * from users WHERE Email=?");
    $stmt->execute([$email]);
    return $stmt->fetchAll();
}
function get_user_by_id($conn, $userID){
    $stmt = $conn->prepare("SELECT * from users WHERE UserID=?");
    $stmt->execute([$userID]);
    return $stmt->fetchAll();
}
function user_exists($conn, $email){
    $users = get_user_by_email($conn, $email);
    if(sizeof($users) > 0){ return true; }
    else{ return false; }
}

function create_user($conn, $user){

    $stmt = $conn->prepare("INSERT INTO users (Email, LastName, FirstName, PasswordHash, Salt) VALUES (?, ?, ?, ?, ?)");
    $stmt->bindParam(1, $user->email);
    $stmt->bindParam(2, $user->lastName);
    $stmt->bindParam(3, $user->firstName);
    $stmt->bindParam(4, $user->password);
    $stmt->bindParam(5, $user->salt);
    return $stmt->execute();
}