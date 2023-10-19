<?php
require_once "Person.php";
require_once "Car.php";
require_once "Course.php";
require_once "Student.php";
require_once "Units.php";
require_once "Lable.php";
require_once "Artist.php";

$student1= new Student("don","kimani",7865);
$student2= new Student("John", "Doe", 1234);
$student3 = new Student("Alice", "Smith", 5678);
echo '<pre>';
var_dump($student1);
echo '</pre>';

echo '<pre>';
var_dump($student2);
echo '</pre>';
  echo'<pre>';
 var_dump($student3);
 echo '</pre>';

 $artist1 = new Artist("don", 4890, 2, "ogopa");
 $artist2 = new Artist("John", 9875, 8, "calif");
 $artist3 = new Artist("Alice", 7897, 7, "homeboyz");
 
 echo '<pre>';
 var_dump($artist1);
 echo '</pre>';
 
 echo '<pre>';
 var_dump($artist2);
 echo '</pre>';
 
 echo '<pre>';
 var_dump($artist3);
 echo '</pre>';

// class Person {
//     public  $name;
//      public $surname;
//    private $age;
//      public static $counter = 0;
    
    
//      public function  __construct($name,$surname)
//  {
//        $this->name=$name;
//        $this->surname=$surname;
//        self::$counter++;
//       }
// public function setAge($age){
//         $this->age=$age;
//     }
//     public function getAge(){

//         return $this->age;
//     }
// }

 //Creating a new instance/object
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
//  //echo $p4->getAge();
//  $p4 =new   person('john','doe');
//  $p4->setAge(1);
//  echo'<pre>';
//  var_dump($p4);
//  echo '</pre>';
//  echo Person::getCounter();

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




// class Car {
//     public $name;
//     public $color;
//     public $price;
//     private $condition;

//     public function __construct($name,$color,$price)

// {
//       $this->name=$name;
//       $this->color=$color;
//       $this->price=$price;

//     }


//    public function setCondition($condition)
   
//    {
//      $this->condition=$condition;
//   }
//   public function getCondition(){
//      return  $this->condition;
//   }
// }

// 
//Setting properties
// $c1 =new Car ('mazda','blue',3000);
// $c1->setCondition('mid');
// echo '<pre>';
// var_dump($c1);
// echo '</pre>';
// echo $c1->getCondition();

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


// class Course { 
//     public $name;
//     public $duration;
//     public $fees;
//   private $adm_no;
  

//     public function __construct($name,$duration,$fees)
// {
//        $this->name=$name;
//         $this->duration=$duration;
//         $this->fees=$fees;
//     }
//  public function setAdm_no($adm_no)
// {
    
//    $this->adm_no=$adm_no;
// }
// public function getAdm_no(){
//     return $this ->adm_no;
// }
//     }

// creating an instant of student
// $student=new Student("antony","tulla","7865");
// echo '<pre>';
// var_dump($student);
// echo '</pre>';

//     // create an instant
//      $l1 = new Course('ui/ux','6months',100000);
//    $l1->setAdm_no(7865);
//    echo "<pre>";
//    var_dump($l1);
//    echo "</pre>";
//    echo $l1->getAdm_no();

//     $l1->name="php programming";
//     $l1->duration ="6 months ";
//     $l1->fees =50000;
//     $l2 =new Course();
//     $l2->name='java programming ';
//     $l2->duration='8 months';
//     $l2->fees=1000000;

//     echo '<br>'. $l1->learn().'<br>';
//  echo '<br>'.$l2->learn ().'<br>';

//   class Animal{
//     public $name;
//     public $color;
//     public $age;
//   private $health_status;


//     public function __construct($name,$color,$age)
// {
//          $this->name=$name;
//           $this->color=$color;
//           $this->age=$age;
//     }
// public  function setHealth_status($health_status)
// {
//     $this->health_status=$health_status;
// }
// public function getHealth_status(){
//      return $this->health_status;
// }
//  }
// //create an instance 
// $an1=new Animal('cat','brown',2);
// $an1->setHealth_status('sick');
// echo'<pre>';
// var_dump($an1);
// echo'</pre>';
// echo $an1->getHealth_status(); 
// $an1->color='brown:';
// $an1->age=7;

// $an2=new Animal();
// $an2->name='buffalo:';
// $an2->color='brown:';
// $an2->age=10;

// echo '<br>'. $an1->wild().'<br>';
// echo '<br>'.$an2->wild ().'<br>';


// class Hotel{
//     public $name ;
//     public $location ;
//     public $capacity ;
//    private $no_employee;

// public function __construct($name,$location,$capacity)
// {
//          $this->name=$name;
//           $this->location=$location;
//           $this->capacity=$capacity;
//     }
//  public function setNo_employee($no_employee)
//  {
//     $this->no_employee = $no_employee;
//  }
//  public function getNo_employee(){
//     return $this->no_employee;
//  }

// }
// //create an instance 
// $h1=new Hotel('utali','thika', 100);
// $h1->setNo_employee(35);
// echo'<pre>';
// var_dump($h1);
// echo'</pre>';
// echo $h1->getNo_employee();

// $h1->location='Nairobi';
// $h1->capacity="30";
// $h2= new hotel ();
// $h2->name='Lake plaza';
// $h2->location='Mombasa';
// $h2->capacity ="50 ";

// // Outputting vehicle information
// echo '<br>'.$h1->find().'<br>';

// class School{
//     public $name;
//     public $location;
//     public $population;
// private $no_teachers;

//     public function __construct($name ,$location,$population)
//     {
//      $this->name=$name;
//      $this->location=$location;
//      $this->population=$population;
//     }
//   public function setNo_teachers($no_teachers){
//    $this->no_teachers=$no_teachers;

//  }
// public function getNo_teachers(){
//     return $this->no_teachers;
// }
// }
// $s = new School("lenana",'kiambu', 1200);
// $s->setNo_teachers('20');
// echo '<pre>';
//  var_dump($s);
// echo '</pre>';
// echo $s->getNo_teachers();
// ;$s2 = new School( "kahawa",'juja',1500);




// class Saccos{
//     //identify properties
//     public $name;
//     public $route;
//     public $color;
//     private $owner;
//      //create a constructed
//      public function __construct($name,$route,$color){
//         $this->name=$name;
//         $this->route=$route;
//         $this->color=$color;

//             }
//             //set the property
//             public function setOwner($owner){
//                 $this->owner=$owner;

//             }
//             public function getOwner(){
//                 return $this->owner;
//             }


  


// }
// //instancess creation
// $sc1= new saccos("rembo","kiambu","green");
// //using the arrow function to call object method
// $sc1->setOwner('kevin mwangi');
// echo'<pre>';
// var_dump($sc1);
// echo'</pre>';
// echo $sc1->getOwner();

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


// class Iphone{
//     public $name;
//     public $year_of_release;
//     private $serial_no;

//     public function  __construct($name,$year_of_release)
//     {
//         $this->name=$name;
//         $this->year_of_release=$year_of_release;
        
        
//     }
     
//        public function setSerial_no( $serial_no)
//        {
//         $this ->serial_no=$serial_no;
//        }

//        public function getSerial_no(){
//        return $this->serial_no;
//     }


//     }



// //create instances
// $ip=new Iphone("Iphone x","2018");
// $ip->setSerial_no('1234wgytdf');
// echo'<br>';
// var_dump ($ip);
// echo'</br>';
// echo $ip->getSerial_no();

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





// class  Movie{

//     public $name;
//     public $category;
//     public $views;
// private $finance;

//    public function __construct($name,$category,$views)
//    {
//     //echo $name.''.$category.''.$views;
//     $this->name =$name;
//     $this->category=$category;
//     $this->views=$views;

//    }
//    public function setFinace($finance)
//    {
//         $this->finance=$finance;
//    }
//     public function getFinance(){
//         return $this->finance;
//     }
//     }

// $m=new Movie("avengers:endgame","action","96 million",);
// $m->setFinace('2000000usd');
// echo '<pre>';
// var_dump($m);
// echo '</pre>';
// echo $m->getFinance();
// $m-> name ="Avengers: Endgame ";
// $m-> category='action';
// $m -> views='96 million';
// $m2=new movie();
// $m2->name ="mission imposible";
// $m2->category='action';
// $m2->views="70 million";



// class Drinks{
     
//     public $tea;
//     public $cofee;
//     public $porridge;
//   private $ingredients;



// public function __construct($tea,$cofee,$porridge)
// {
//     $this->tea=$tea;
//     $this->cofee=$cofee;
//     $this->porridge=$porridge;
// }
//     public function setIngredients($ingredients)
//     {


//         $this->ingredients=$ingredients;
    
// }
// public function getIngredients()
// {
//     return $this->ingredients;
// }
// }

// $d=new Drinks('tea','cofee','porridge');
// $d->setIngredients('water','leaves');
// echo $d->getIngredients();