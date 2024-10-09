<?php
// Activity 11: Fibonacci Sequence

$num1 = 0;
$num2 = 1;
$sequence  = 0;

while ($sequence  < 10) {
    echo $num1 . " ";
    $sum = $num1 + $num2;
    $num1 = $num2;
    $num2 = $sum;
    $sequence ++;
}

?>