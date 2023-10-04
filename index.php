<?php
//number


//declaring number
//$a=1;
//$b=4;
//$c=7.8;
//arthmetic operation
//echo ($a+$b)*$c;
//echo $a % $b;

//assignment with math operator
//$a=$a+$b;
 //$a+=$b; echo $a.'<br>';
 //$a-=$b;echo $a.'<br>';
 //$a*=$b;  echo $a .'<br>' ;
 //$a/=$b;$a++; echo $a.'<br>'; 
  //post increment
 //echo++$a;
// decrement operator
//echo $a--.'<br>';
//echo --$a.'<br>';
//echo --$b.'<br>';
//echo $a++ .'<br>';
//echo ++$a.'<br>';

// number checking function
//is_float(1.25);
//is_double(1.25);
//is_int(5);
//is_numeric('3.14');
//is_numeric('3h.14');

//conversion

//$strNumber ='12.34';
//$number =(float)$strNumber;
//var_dump($number);



//$strNumber ='12.34';
//$number =(int)$strNumber;
//var_dump($number) .'<br>';

//$strNumber ='12.34';
//$number =intval($strNumber);
//var_dump($number) .'<br>';

//$strNumber ='12.34';
//$number =floatval($strNumber);
//var_dump($number) .'<br>';
//echo '<br>';


//echo "abs(-15) " . abs(-15) . '<br>';
//echo "pow(2,  3) " . pow(2, 3) . '<br>';
//echo "sqrt(16) " . sqrt(16) . '<br>';
//echo "max(2, 3) " . max(2, 3) . '<br>';
//echo "min(2, 3) " . min(2, 3) . '<br>';
//echo "round(2.4) " . round(2.4) . '<br>';
//echo "round(2.6) " . round(2.6) . '<br>';
//echo "floor(2.6) " . floor(2.6) . '<br>';
//echo "ceil(2.4) " . ceil(2.4) . '<br>';

//number formating
//$number=123456789.12345;
//echo number_format($number,2,'.',',').'<br>';



// Create simple string
//$name ='zura';
//$string ='helo i am $name.i am 28';
//$string2="helo i am $name .iam 28";
//echo $string.'<br>';
//echo $string2.'<br>';


// String concatenation
//$country= 'usa';
//$gunlaw ="$country has enacted the gun law";
//echo "$gunlaw <br>";




// String functions
//$word =" hello world";
//echo "1 - " . strlen($word) . '<br>' . PHP_EOL;
//echo "2 - " . trim($word) . '<br>' . PHP_EOL;
//echo "3 - " . ltrim($word) . '<br>' . PHP_EOL;
//echo "4 - " . rtrim($word) . '<br>' . PHP_EOL;
//echo "5 - " . str_word_count($word) . '<br>' . PHP_EOL;
//echo "6 - " . strrev($word) . '<br>' . PHP_EOL;
//echo "7 - " . strtoupper($word) . '<br>' . PHP_EOL;
//echo "8 - " . strtolower($word) . '<br>' . PHP_EOL;
//echo "9 - " . ucfirst('hello') . '<br>' . PHP_EOL;
//echo "10 - " . lcfirst('HELLO') . '<br>' . PHP_EOL;
//echo "11 - " . ucwords('hello world') . '<br>' . PHP_EOL;
//echo "12 - " . strpos($word, 'world') . '<br>' . PHP_EOL; // Change into world
//echo "13 - " . stripos($word, 'world') . '<br>' . PHP_EOL;
//echo "14 - " . substr($word, 8) . '<br>' . PHP_EOL;
//echo "15 - " . str_replace('World', 'PHP', $word) . '<br>' . PHP_EOL;
//echo "16 - " . str_ireplace('world', 'PHP', $word) . '<br>' . PHP_EOL;




// Multiline text and line breaks

//$longText ="hellow ,my name is ryan 
//I am 27
//,I love my daughter";
//echo $longText.'<br>';


//$longSentence ="kenya is one big country that has a huge christian population";
//echo $longSentence.'<br>';
// Multiline text and reserve html tags
//$longText="
//Hello, my name is <b>Zura</b>
//I am <b>27</b>,
//I love my daughter
//";
//echo "1 - " . $longText . '<br>';
//echo "2 - " . nl2br($longText) . '<br>';
//echo "3 - " . htmlentities($longText) . '<br>' . PHP_EOL;
//echo "4 - " . nl2br(htmlentities($longText)) . '<br>' . PHP_EOL;
//echo "5 - " . html_entity_decode(htmlentities($longText)) . '<br>' . PHP_EOL;
//echo "6 - " . htmlspecialchars($longText) . '<br>' . PHP_EOL;


// https://www.php.net/manual/en/ref.strings.php
// Create array
//$fruits=["banana","apple","orange"];
//$money=['pesos','shiling','dollar'];

// Print the whole array
//echo'<pre>';
//var_dump($fruits);
//echo'<pre>';
// Get element by index
//echo $fruits[2].'<br>';
// Set element by index
///echo $fruits[0] ='peach';
//echo $fruits[1]='mango';
//echo $fruits[2]='pineaple';
//echo'<pre>';
//var_dump($fruits);
//echo'<pre>';

// Check if array has element at index 2
//isset($fruits[3]); //false
//isset($fruits[2]);//true
//isset ($fruits[1]);//true
//isset($fruits[0]);// true


// Append element
//$fruits[]='grapes';
//$fruits[]='berries';
///$fruits[]='bananas';
//e   cho'<pre>';
//var_dump($fruits);
// echo'<pre>';
// echo $fruits[3].'<br>';


// Print the length of the array
// echo count ($fruits).'<br>';
// unset($fruits[3]);
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
// // Add element at the end of the array

// array_push($fruits,'avocado');
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
// // Remove element from the end of the array
// echo array_pop($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
// echo array_pop($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';

// // Add element at the beginning of the array
// array_unshift($fruits,'bar');
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
// array_unshift($fruits,'papaya');
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
// array_unshift($fruits,'kiwi');
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';


// // Remove element from the beginning of the array
// array_shift($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';

// // Split the string into an array
// $string='dragon fruit ,watermelon ,pasion fruit';
// echo '<pre>';
// var_dump(explode(',',$string));
// echo'<pre>';
// $string3='pink,green,blue,red';
// echo '<pre>';
// var_dump(explode(',',$string3));
// echo'<pre>';
// $counties='kenya, uganda, tz, somalia';
// echo '<pre>';
// var_dump(explode(',',$counties));
// $teams='arsenal,man u,liverpool,mancity,briton';
// echo'<pre>';
// var_dump (explode(',', $teams ));
// echo'<pre>';


// // Combine array elements into string
// $fruits=["banana","apple","orange"];
// echo'<pre>';
// var_dump (implode(",", $fruits));
// echo'<pre>';
// // Check if element exist in the array

// //var_dump (in_array("arsenal", $teams));


// // Search element index in the array
// echo'<pre>';
// var_dump(array_search('melon
// ',$fruits));
// echo'<pre>';

// // Merge two arrays
// $vegetables = ['potato','cucumber'];
// echo'<pre>';
// var_dump(array_merge($vegetables,$fruits));
// var_dump([$fruits,$vegetables]);

// echo'</pre>';


// // Sorting of array (Reverse order also)
// sort($fruits);
// echo'<pre>';
// var_dump($fruits);
// echo'</pre>';
  

// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
// $person=[
//     'name'=>'brad',
//     'surname'=>'junior',
//     'age'=> 40,
//     'hobbies'=>['tenis','code']];
//     echo '<pre>';
//     var_dump($person);
//     echo'</pre>';






// // Get element by key
// echo "<p>".$person["name"]."</p>";
// echo '<p>'.$person ['age'].'</p>';
// echo '<p>'.$person ['hobbies'],'</p>';

// // Set element by key
// //$person['location']='nairobi kenya';
// //echo '<pre>';
// //var_dump ($person );
// //echo '</pre>';

// // Null coalescing assignment operator. Since PHP 7.4
//  if (!isset($person ['location'])){    
//     $person['location']=null;

//  }
// //  echo '<pre>';
// // var_dump ($person );
// // echo '</pre>';

// $person['location'] ??='unknown';
// echo'<pre>';
// var_dump($person);
// echo'</pre>';
// // Check if array has specific key
// echo '<pre>';
// var_dump(array_keys($person));
// echo '</pre>';
// // Print the keys of the a

// // Print the values of the array
// echo '<pre>';
// var_dump(array_values($person));
// echo '</pre>';

// // Sorting associative arrays by values, by keys
// asort($person);
// echo'<pre>';
// var_dump($person);
// echo '</pre>';

// // Two dimensional arrays
// $todo=[
//     ['title'=>'Todo title 1','completed'],
//     ['title'=>'Todo title 2','completed']

// ];
// echo'<pre>';
// var_dump($todo);
// echo '</pre>';
$age = 20;
$salary = 300000;

// Sample if

// Without circle braces

// Sample if-else

// Difference between == and ===

// if AND

// if OR

// Ternary if

// Short ternary

// Null coalescing operator

// switch


?>