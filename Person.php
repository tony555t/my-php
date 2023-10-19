<?php

class Person {
    public   string $name;
     public string $surname;
   private ?int $age;
     public static int $counter = 0;
    
    
     public function  __construct($name,$surname)
 {
       $this->name=$name;
       $this->surname=$surname;
       self::$counter++;
      }
public function setAge($age)
{
        $this->age=$age;
    }
    public function getAge(){

        return $this->age;
    }
   public static function getCounter(){
      return self::$counter;
   }
}


//  //Creating a new instance/object
//  $p1 = new Person('antony','tula');
//  $p1->setAge(1);
//  echo'<pre>';
//  var_dump($p1);
//  echo '</pre>';
//  echo $p1->getAge();
//  $p2 =new   person('john','doe');
//  echo'<pre>';
//  var_dump($p2);
//  echo '</pre>';

//  //Creating a new instance/object
//  $p3= new Person('santan','dave');
//  $p3->setAge(1);
//  echo'<pre>';
//  var_dump($p3);
//  echo '</pre>';
//  echo $p4->getAge();
//  $p2 =new   person('john','doe');
//  echo'<pre>';
//  var_dump($p4);
//  echo '</pre>';
//  echo Person::getCounter();