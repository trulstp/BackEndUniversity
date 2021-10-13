<?php

require_once "class_Database.php";

class User extends Database {
    
    //initial properties
    protected $username;
    protected $role;
    private $password;
    
    function __construct($username,$password){
        //use only for login
        
        echo "USER : Constructor!<br>";
        
        $this->username = $username;
        $this->password = $password;
        
        
    }
    
    // create User methods
    protected function createUser($name,$surname){
        echo "User : In createUser<br>";
        
    }
    
    public function loginUser(){
        //echo "USER : LoginUser!<br>";

    }
    
    protected function generateUsername($name,$surname){
        
    }
    
    protected function checkIfUsernameUnique($username){

    }
    
    protected function generateDefaultPassword($name,$surname){
        $this->password = $name . $surname;
    }
        
    // Database methods
    protected function addUserEntryinDB(){

    }
    
    
    // Registration Methods
    protected function updateUserPassword(){
        // function to update password upon registration
    }
}//end class




?>