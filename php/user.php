<?php
/**
 * Created by PhpStorm.
 * User: mackp
 * Date: 2017-11-27
 * Time: 7:53 PM
 */


class User{ //Stores user information
    public $userID;
    public $email;
    public $firstName;
    public $lastName;
    public $dob;
    public $password;
    public $salt;

    public function init_password($password){
        $this->salt = random_bytes(64);
        $this->password = password_hash($password, PASSWORD_BCRYPT, ['salt' => $this->salt]);
    }

    public function __construct($email, $firstName, $lastName, $dob){
        $this->firstName = trim($firstName);
        $this->lastName = trim($lastName);
        $this->email = trim($email);
        $this->dob = trim($dob);
    }
}
