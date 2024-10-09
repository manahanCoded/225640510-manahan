<?php
// Activity 2: Password Validator

$correctPassword = "password123";
do {
    $input = readline("Please enter the password: ");
    if ($input != $correctPassword) {
        echo "Incorrect password.\n";
    }
} while ($input != $correctPassword);
echo "Access Granted.\n";

?>