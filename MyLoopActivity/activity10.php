<?php
// Activity 10: Prime Number Checker

$number = readline("Enter number: ");
$isPrime = true;
if ($number <= 1) {
    $isPrime = false;
} else {
for ($i = 2; $i <= sqrt($number); $i++) {
    if ($number % $i == 0) {
        $isPrime = false;
        break;
        }
    }   
}   
if ($isPrime) {
    echo "$number is a prime number.\n";
} else {
    echo "$number is not a prime number.\n";
}

?>