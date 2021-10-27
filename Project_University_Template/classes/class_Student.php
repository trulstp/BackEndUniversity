<?php

// class definition for student here

/*

class methods to include :

- constructor
The constructor will take in 4 input arguments - studentID, firstname, surname, birthdate and assign those into the class properties. 

Next, call the checkIfNewStudent to see if the current student already exists. If new student, then call createStudentEntry() to create a new student Entry. 

Note that the createUser() method from the User class should also be called to create a new User

- checkIfNewStudent()
Checks if the a student with the current studentID already exists in the students table in the database. Returns TRUE if new Student, or FALSE otherwise. 

- createStudentEntry()
Adds a new student entry, based on the current class properties, to the students table in the database. 

*/
Class Student extends User {

    function __construct(){

    }
}
?>