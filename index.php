<?php
declare(strict_types=1);
// Dispaly single line with echo syntex
echo 'Hello world.<br>';

// Can Display the same thing using print syntex. But print sysntex automativaly return 1. 
print "Hello World With 'print' syntex.<br>";
echo print("Hello World With 'print' syntex.<br>"); // retun value 1 displayed by echo sysntex
echo '<br>';

// Variable 
$x = 1;
$y = $x;
$x = 3;
echo $y.'<br>'; // Concetanate by '.'

$x = 1;
$y = &$x;  // refarenceing value
$x = 3;
echo $y.'<br>';

// Constant
/* Constants are more like as Variables but main differnce between them is, constant contains fixed value. We can assign value once in it. For easy eyecatching contansts are written is Capital letters. */

// Using Define function
/* Define method can use for createing a constant. This Method contains two perametres. The first one is the constant name and second one is the value assign in the define constant. */
define('BEST_PRICE',299) ;
echo BEST_PRICE;
echo '<br>';

/* We can dynamicaly assign the constant name from the outside the define function*/
$x = 'WORST';
define($x.'_PRICE', 399);
echo WORST_PRICE;
echo '<br>';

/* WE can create a constant using const keyword. */
const BEST_SIZE = 50;
echo BEST_SIZE;
echo '<br>';

/*There are many pre define constant by PHP called MAGIC CONSTANT. */
echo PHP_VERSION;
echo '<br>';
echo __FILE__;
echo '<br>';
echo __LINE__;
echo '<br>';

/* Variable Variables */

$x = 'Rim';
$$x = 'Jhim'; //Here $x assign its value 'Rim' as variable name and then Rim variable is assigning value Jhim in it.
echo $x,$Rim;
echo '<br>';
echo $x,$$x;
echo '<br>';


/* php data type and type casting. */

# 4 scalery type data
  // int
  // float
  // string
  // bolean
# 4 compound type data
  // array
  // object
  // callable
  // interable
# 2 special type data
  // resource 
  // null 


// To see the data type we can use var_dump()
var_dump($x);
/* php automaticaly cast the data type. But we can strict the data type as we expect. declare(strict_types=1); statement have to put top of the script */
//declare(strict_types=1);

function sum(int $x,int $y){
  return $x+$y;
}
echo sum(1,4).'<br>';

/*Change the data type or type casting*/

$change = (int)'5'; // Here we change the string data into a iteger data.
var_dump($change);
$change = (float)'5'; // Here we change the string data into a float data.
var_dump($change);
echo '<br>';


/* booleans*/

// 0 and -0 is = false
// -0 and -0.0 is = false
// '' = false
// '0' =  false
// [] = false
// null = false

//$x = true;
//$x = false;
$x = '';
//$x = 'false';

var_dump($x);
 
if($x){
  echo 'success';
}else{
  echo 'fail'.'<br>';
}
/* Integer */

// To get decimal integer value, it is the treditional way.
$x = 25;
// To get hexa-decimal value , have to use 0x before the value.
$x = 0x25; // it will convert the hexa-decimal value to decimal and assign into $x
var_dump($x);
// Maximum integer value a varible can assign in php
$x = PHP_INT_MAX;
var_dump($x);
// Integer type casting

$x = (int)'2000'; // convert string data into integer
$x = (int)'abcd'; // it will convert into 0
$x = (int)'20_abcd';// it will convert into iteger 20

// to varify the value is integer or not
var_dump(is_int($x)); // will display bollean value 1 or 0 
var_dump($x);


/* Float */

$x = 0.23;
var_dump($x);
$y = 1-0.77;
echo $x+$y;

if($x==$y){
  echo 'True'.'<br>';
}else{
  echo 'false'.'<br>';
}
// floor method return only integer value
$x =(0.3+0.6)*4;
echo floor($x);
// ceil method for roundup the float number
$x =(0.3+0.6)*4;
echo ceil($x);

$x = PHP_FLOAT_MAX * 2; // Infinite number
var_dump(is_finite($x));

?>
