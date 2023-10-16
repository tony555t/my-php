<?php
class Person {
    public $name;
     public $surname;
   private $age;
    
    
     public function  __constructer($name,$surname)
 {
       $this->name=$name;
       $this->surname=$surname;
      }
public function setAge($age){
        $this->age=$age;
    }
}

 //Creating a new instance/object
 $p1 = new Person('antony','tula');
 $p1->setAge(30);

// // Setting properties
// $p1->name = "Alice";
// $p1->surname = "Smith";
// $p1->age = 30;
//  $p2= new person ();
//  $p2->name = "kim";
// $p2->surname = "uyn";
// $p2->age = 34;
 



// // Invoking the greet method on the instance

// echo "<br>" . $p1->greet();
// echo "<br>" . $p2->greet();
// echo "<br>" . $p->greet();




class Car {
    public $name;
    public $color;
    public $price;
    private $condition;

    public function vehicle($name,$color,$price)

{
      $this->name=$name;
      $this->color=$color;
      $price->price=$price;

    }


   public function setCondition($condition)
   
   {
     $this->condition=$condition;
  }
}

// 
//Setting properties
$c1 =new Car ('mazda','blue','3000usd');
$c1->setCondition('mid');

// $c1->name = "toyota";
// $c1->color = "blue";
// $c1->price = 30000000;
//  $c2= new Car ();
//  $c2->name = "porshe";
// $c2->color = "black";
// $c2->price = 30000004;
// // 
// // 
// echo '<br>'. $c1->vehicle()."<br>";
// echo '<br>'. $c2->vehicle()."<br>";


class Course { 
    public $name;
    public $duration;
    public $fees;
  private $adm_no;
  

    public function __constructer($name,$duration,$fees)
{
       $this->name=$name;
        $this->duration=$duration;
        $this->fees=$fees;
    }
 public function setAdm_no($adm_no)
{
    
   $this->adm_no=$adm_no;
}
    }
    // create an instant
     $l1 = new Course('ui/ux','6months',100000);
   $li->setAdm_no(7865);

//     $l1->name="php programming";
//     $l1->duration ="6 months ";
//     $l1->fees =50000;
//     $l2 =new Course();
//     $l2->name='java programming ';
//     $l2->duration='8 months';
//     $l2->fees=1000000;

//     echo '<br>'. $l1->learn().'<br>';
//  echo '<br>'.$l2->learn ().'<br>';

 class Animal{
    public $name;
    public $color;
    public $age;
  private $health_status;


    public function __constructor($name,$color,$age)
{
         $this->name=$name;
          $this->color=$color;
          $this->age=$age;
    }
public  function setHealth_status($health_status)
{
    $this->health_status=$health_status;
}
 }
//create an instance 
$an1=new Animal('cat','brown','2yr');
$an1->setHealth_status('sick');
// $an1->color='brown:';
// $an1->age=7;

// $an2=new Animal();
// $an2->name='buffalo:';
// $an2->color='brown:';
// $an2->age=10;

// echo '<br>'. $an1->wild().'<br>';
// echo '<br>'.$an2->wild ().'<br>';


class Hotel{
    public $name ;
    public $location ;
    public $capacity ;
   private $no_employee;

    public function __constructor($name,$location,$capacity)
{
         $this->name=$name;
          $this->location=$location;
          $this->capacity=$capacity;
    }
 public function setNo_employee($no_employee)
 {
    $this->no_employee = $no_employee;
 }

}
//create an instance 
$h1=new hotel('utali','thika', 100);
$h1->setNo_employee(35);

// $h1->location='Nairobi';
// $h1->capacity="30";
// $h2= new hotel ();
// $h2->name='Lake plaza';
// $h2->location='Mombasa';
// $h2->capacity ="50 ";

// // Outputting vehicle information
// echo '<br>'.$h1->find().'<br>';

class School{
    public $name;
    public $location;
    public $population;
private $no_teachers;

    public function __construct($name ,$location,$population)
    {
     $this->name=$name;
     $this->location=$location;
     $this->population=$population;
    }
  public function setNo_teachers($no_teachers){
   $this->no_teachers=$no_teachers;

 }
}
$s = new School("lenana",'kiambu', 1200);
$s->setNo_teachers('20');
// echo '<pre>';
// var_dump($p);
// echo '</pre>';
// ;$s2 = new School( "kahawa",'juja',1500);




class Saccos{
    //identify properties
    public $name;
    public $route;
    public $color;
    private $owner;
     //create a constructed
     public function __construct($name,$route,$color){
        $this->name=$name;
        $this->route=$route;
        $this->color=$color;

            }
            //set the property
            public function setOwner($owner){
                $this->owner=$owner;

            }


  


}
//instancess creation
$sc1= new saccos("rembo","kiambu","green");
//using the arrow function to call object method
$sc1->setOwner('kevin mwangi');

// $sc1->name='twin star';
// $sc1->route='kabete';
// $sc1->color='blue';
// $sc2= new saccos ();
// $sc2->name='umoinner';
// $sc2->route='umoja';
// $sc2->color ="red ";

// ///out put the sacco

// echo '<br>'.$sc1->travel().'<br>';
// echo '<br>'.$sc2->travel().'<br>';


class Iphone{
    public $name;
    public $year_of_release;
    private $serial_no;

    public function  __construct($name,$year_of_release)
    {
        $this->name=$name;
        $this->year_of_release=$year_of_release;
        
        
    }
     
       public function setSerial_no( $serial_no)
       {
        $this ->serial_no=$serial_no;
       }


    }



//create instances
$ip=new Iphone("Iphone x","2018");
$ip->setSerial_no('1234wgytdf');
echo'<br>';
var_dump ($ip);
echo'</br>';

// $ip->name="Iphone x";
// $ip->year_of_release = "2018";

// $ip2=new Iphone();
//$ip2->name='iphone 12';
// $ip2->year_of_release ='2021';

// $ip3= new iphone();
// $ip3->name='iphone 7';
// $ip3->year_of_release='2015 ';


// $ip4= new Iphone();
// $ip4->name='iphone XR';
// $ip4->year_of_release='2020';

// echo'<br>'.$ip->phones().'<br>';

// echo '<br>'.$ip2->phones().'<br>';

// echo'<br>'.$ip2->phones().'<br>';
// echo '<br>'.$ip4->phones().'<br>';





class  Movie{

    public $name;
    public $category;
    public $views;
    private $finance;

   public function __construct($name,$category,$views)
   {
    //echo $name.''.$category.''.$views;
    $this->name =$name;
    $this->category=$category;
    $this->views=$views;

   }
   public function setFinace($finance)
   {
        $this->finance=$finance;
   }

    }

$m=new Movie("avengers:endgame","action","96 million",);
$m->setFinace('2000000usd');
echo '<pre>';
var_dump($m);
echo '</pre>';
// $m-> name ="Avengers: Endgame ";
// $m-> category='action';
// $m -> views='96 million';
// $m2=new movie();
// $m2->name ="mission imposible";
// $m2->category='action';
// $m2->views="70 million";
