<?php
// class definition for Employee here

/*

initial properties : 
employeeID
name (or firstname)
surname

class methods to include :

- constructor
The constructor will take in 3 input arguments - employeeID, firstname, surname and assign those into the class properties. 

Next, call the checkIfNewEmployee to see if the current employee already exists. If new employee, then call createEmployeeEntry() to create a new Employee Entry. 

Note that the createUser() method from the User class should also be called to create a new User

- checkIfNewEmployee()
Checks if the employee with the current employeeID already exists in the employees table in the database. Returns TRUE if new employee, or FALSE otherwise. 

- createEmployeeEntry()
Adds a new employee entry, based on the current class properties, to the employees table in the database. 
*/
Class Employee extends User {

    
}


?>