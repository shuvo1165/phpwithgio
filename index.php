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
?>
