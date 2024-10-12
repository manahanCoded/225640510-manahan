<?php
// Activity 7: Key-Value Pairs with foreach

$student = ["Name"=>"Alice", "Age" => "20", "Grade"=>"A", "City"=>"Baguio"];
foreach($student as $key => $information){
    echo $key . ": $information\n";
}

?>