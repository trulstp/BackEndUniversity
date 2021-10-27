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

    public static function createAdmin(){
        $username = 'admin';
        $role = 0;
        $password = '0admin0';

        $connection = User::connect();

        $insert = "INSERT INTO users(username, role, password)";
        $insert .= "VALUES ('$username', '$role', '$password')";
        
       $result = mysqli_query($connection, $insert);
    
       if(!$result){
           die('Query failed createdata!' . mysqli_error($connection));
       } else {
           echo "new customer added";
       }
    }
    
    
    // create User methods
    protected function createUser($name,$surname){
        echo "User : In createUser<br>";

        
        /* 
        calls the generateUsername() and generateDefaultPassword methods. 
        
        Checks class type to generate role. 
        
        Assigns generated values above to class properties. 
        
        Finally calls the addUserEntryinDB() to add user details to database. 
        
        
        */
        
    }
    
    public function loginUser(){
        //echo "USER : LoginUser!<br>";
        
        /*
        This function will allow an existing user to log in, based on input username and input password. 
        
        - will essentially involve checking if the input password and the hashed password from the database, match. 
        
        Should return TRUE if the login was successful, or FALSE otherwise. 
            
        */

    }
    
    protected function generateUsername($name,$surname){
        echo "User : In generateUsername<br>";
        $str1 = substr($name, 0, 2); // first 2 letters of firstname
        $str1 .= substr($surname, 0, 3); // first 3 letters of lastname
        $string = strtolower($str1); // making lowercase
        
        $isUsernameUnique = FALSE;
        $idx = 0;
        while ($isUsernameUnique == FALSE){
            $username = $string . rand(0,9); // appending a random digit.
            $username .= rand(0,9); // appending a random digit.
            
            $isUsernameUnique = $this->checkIfUsernameUnique($username);
            $idx++;
            
            if($idx >100){
                echo "No unique username could be generated!";
                break;
            }
        }
        
        $this->username = $username;
    }
    
    protected function checkIfUsernameUnique($username){
        /* write a function that checks on the database to see if the generated username is unique. The function should return TRUE if generated username is indeed unique, or FALSE otherwise. 
        
        */

    }
    
    protected function generateDefaultPassword($name,$surname){
        $this->password = $name . $surname;
    }
        
    // Database methods
    protected function addUserEntryinDB(){
        echo "USER : addUserEntryinDB<br>";
        /*  
        
        - first establish connection to database, use only the methods in the Database class. 
        
        - hash the password value stored in class property 'password'. 
        
        - write a query to database to insert class properties - username, role and hashed password into the user table. 
        
        - print error message in case of query failure
        
        - finally, disconnect.
        
        */
        

    }
    
    
    // Registration Methods
    protected function updateUserPassword(){
        // function to update database password upon registration
    }
}//end class




?>