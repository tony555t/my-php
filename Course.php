<?php

class Course { 
    public $name;
    public $duration;
    public $fees;
  private $adm_no;
  

    public function __construct($name,$duration,$fees)
{
       $this->name=$name;
        $this->duration=$duration;
        $this->fees=$fees;
    }
 public function setAdm_no($adm_no)
{
    
   $this->adm_no=$adm_no;
}
public function getAdm_no(){
    return $this ->adm_no;
}
    }