<?php 
// Just a file, where you can test the different classes. 

// testing of classes
require "classes/class_Student.php";
require "classes/class_Employee.php";
require "classes/class_Course.php";
require "classes/class_CourseTaken.php";
include "functions.php";


/*
echo "<pre>";
$employee1 = new Employee('E0002','Raj','Joye');
print_r($employee1);

$stud1 = new Student('S0004','Jack','Frost',getTime('8/16/2001'));
print_r($stud1);
*/
echo "<pre>";

$resArray = Student::readDBTable();
print_r($resArray);

//Adding courses to database
/*
$data = readThisFile('inputFiles/input_Courses.csv');
$resArray = createAssocArray($data['headersArray'],$data['valuesArray']);

//print_r($resArray);

foreach ($resArray as $item){
    $courseCode = $item['Course Code'];
    $courseName = $item['Course Name'];
    $employeeID = $item['EmployeeID'];
    $credits = $item['Credits'];
    
    $course1 = new Course($courseCode,$courseName,$employeeID,$credits);
    
}
*/

// Adding Employees to database
/*
$data = readThisFile('inputFiles/input_Employees.csv');
$resArray = createAssocArray($data['headersArray'],$data['valuesArray']);

//print_r($resArray);

foreach ($resArray as $item){
    $employeeID = $item['Employee ID'];
    $name = $item['Name'];
    $surname = $item['Surname'];
    
    $employee1= new Employee($employeeID,$name,$surname);
    
}
*/

//Adding Students to database
/*
$data = readThisFile('inputFiles/input_Students.csv');
$resArray = createAssocArray($data['headersArray'],$data['valuesArray']);

//print_r($resArray);

foreach ($resArray as $item){
    $studentID = $item['Student ID'];
    $name = $item['Name'];
    $surname = $item['Surname'];
    $DOB = $item['Birthdate'];
    
    $student1= new Student($studentID,$name,$surname,getTime($DOB));
    
}
*/


//Adding CoursesTaken to database
/*

$data = readThisFile('inputFiles/input_CoursesTaken.csv');
$resArray = createAssocArray($data['headersArray'],$data['valuesArray']);

print_r($resArray);

foreach ($resArray as $item){
    $studentID = $item['Student ID'];
    $courseCode = $item['Course Code'];
    $year = $item['Course Year'];
    $semester = $item['Course Semester'];
    $grade = $item['Grade'];
    
    $courseTaken1 = new CourseTaken($studentID,$courseCode,$year,$semester,$grade);
    
    print_r($courseTaken1);

    
}
*/





/*
$timestamp=getTime('8/16/2001');
echo "Timestamp : $timestamp<br>";
echo gmdate("m/d/Y", $timestamp);

echo "<br> Date : " . date("m/d/Y",$timestamp);
*/

/*
$course1 = new Course('ECSE2041','Electromagnetism','E0002',7);
print_r($course1);

// Careful : running this part multiple times, will add duplicate entries into database

$courseTaken1 = new CourseTaken('S0004','ECSE2041',2019,'Autumn','A');
print_r($courseTaken1);
*/






?>