<?php
//chld of course
require_once "Course.php";
class Units extends Course
{
 public string $no_units;

 public  function __construct($name,$duration,$no_units)
 {
    $this->no_units=$no_units;
    parent::__construct($name,$duration ,$no_units);
 }
}