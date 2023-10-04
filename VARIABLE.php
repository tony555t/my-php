<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>
    <!-- External CSS links or internal CSS styles can be included here -->
</head>
<body>
    <header>
        <h1>first project</h1>
    </header>
    
    <main>
    <?php
      
      echo "hello world";
      echo '<br>';
      echo '<button>click me</button>';

    
    
    ?>
    <?php
   echo  'hello world from china';


    ?>

<?php 
$name ='zura';
$age=28;
$ismale =true;
$height =1.85;
$salary = null;
//print the varialable
echo  '<br>';
 echo $name.'<br>';
 echo $age;
 $string1='antony';
 $string2='tulla';
 $result= $string1.$string2;
 echo $result;


 $name ='zura';
$age=28;
$ismale =false;
$height =1.85;
$salary = null;

echo $name.'<br>';
echo $age.'<br>';
echo $ismale.'<br>';
echo $height.'<br>';
echo $salary.'<br>';

//printing type of variables
echo gettype($age).'<br>';
echo gettype($ismale).'<br>';
echo gettype($height).'<br>';
echo gettype($salary).'<br>';
echo gettype($name).'<br>';

//printing the whole variable
var_dump($age);
var_dump($ismale,$age,$ismale,$height,$salary);

//changing the value of the variable
$name = false
//printing type of the variable
//is_string($name);
//is_string($age);


//' checking if the variable is defined
//isset($name);//true
//isset($address);//false

//constants

define ('PI',3.14);
echo PI.'<br>';



//USING PHP BUILT-IN CONSTANTS
ECHO

?>

        <!-- Main content of the page -->
    </main>
    
    <footer>
        <!-- Footer content (e.g., copyright information) -->
    </footer>

    <!-- External JavaScript files or inline scripts can be included here -->
</body>
</html>
