<?php
// Activity 8: Factorial Calculator

$number = 5;
$factorial = 1; 
for ($i = $number; $i > 0; $i--) {
    $factorial *= $i;
}
echo "Factorial of $number is: $factorial\n";

?>