
<?php
//child class of a person
require_once "Person.php";

class Student extends Person
{
 public string $student_id;

 public function __construct($name,$surname ,$student_id)

 
 {
    $this->student_id=$student_id;
    parent::__construct($name,$surname);
 }
}