<?php
class User{ //Stores user information
    public $userID;
    public $email;
    public $firstName;
    public $lastName;
    public $password;
    public $salt;

    public function __construct($email, $firstName, $lastName, $password){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;

        $this->salt = random_bytes(64);
        $this->password = password_hash($password, PASSWORD_BCRYPT, ['salt' => $this->salt]);
    }
}

include('database.php');
$conn = connect_db();
$message = "Message is unchanged!";

if($_POST['formSubmit'] == "Register"){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm = $_POST['confirm'];
    //TODO Do validation on these inputs on server side here
    if(user_exists($conn, $email)){
        $message = "There is already an account for the email you provided\n";
    }
    $user = new User($email, $firstName, $lastName, $password);
    if(create_user($conn, $user)){
        $message="Congratulations on your new account!";
    }
}
else if($_POST['formSubmit'] == "Login"){
    $email = $_POST['loginEmail'];
    $password = $_POST['loginPassword'];

}

echo $message

?>