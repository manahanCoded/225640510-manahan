<?php
// Activity 12: Reverse a String

$inputString = "Hello"; 
$reversedString = "";

for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
    $reversedString .= $inputString[$i];
}
echo "Input: \"$inputString\"\n";
echo "Output: \"$reversedString\"\n";

?>