<?php  
$dividend = readline("Enter a dividend:");
$divisor = readline("Enter a divisor:"); 
$quotient = intdiv($dividend, $divisor); //to calculate integer division 
$remainder = fmod($dividend, $divisor);  //used for return floating point reminder of division
echo "The quotient of " . $dividend . " and " . $divisor . " is: " . $quotient . "\n";  
echo "The remainder of " . $dividend . " and " . $divisor . " is: " . $remainder . "\n";  
?>    