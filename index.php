<?php
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
?>
