    <?php
        //Loops
        
        // Activity 1: Number Counter

        $num = 2;
        while($num <= 20){
            echo  $num . " ";
            $num= $num + 2 ;
        }
        
        // Activity 2: Password Validator

        $correctPassword = "password123";
        do {
            $input = readline("Please enter the password: ");
            if ($input != $correctPassword) {
                echo "Incorrect password.\n";
            }
        } while ($input != $correctPassword);
        echo "Access Granted.\n";

        // Activity 3: Multiplication Table

        for($i = 1 ; $i <= 10; $i++){
            echo "7 x $i = " . (7 * $i) . "\n";
        };

        // Activity 4: Loop Control with break and continue

        for ($i = 1; $i <= 10; $i++) {
            if ($i == 5) {
                continue;
            }
            if ($i == 8) {
                break;
            }
            echo $i . " ";
        }

        // Activity 5: Sum of Numbers

        $sum = 0;
        $i = 1;
        while ($i <= 100) {
            $sum += $i;
            $i++;
        }
        echo "The sum of numbers from 1 to 100 is: $sum\n";

        //Activity 6: Array Iteration with foreach

        $movies = array("The Shawshank Redemption", "Inception", "The Dark Knight", "Interstellar", "Parasite");
        foreach($movies as $index => $movie){
            echo ($index + 1) . ". $movie\n";
        }

        // Activity 7: Key-Value Pairs with foreach

         $student = ["Name"=>"Alice", "Age" => "20", "Grade"=>"A", "City"=>"Baguio"];
        foreach($student as $key => $information){
            echo $key . ": $information\n";
        }

        // Activity 8: Factorial Calculator

        $number = 5;
        $factorial = 1; 
        for ($i = $number; $i > 0; $i--) {
            $factorial *= $i;
        }
        echo "Factorial of $number is: $factorial\n";

        // Activity 9: FizzBuzz Challenge

        for ($i = 1; $i <= 50; $i++) {
            if ($i % 3 == 0 && $i % 5 == 0) {
                echo "FizzBuzz ";
            } elseif ($i % 3 == 0) {
                echo "Fizz ";
            } elseif ($i % 5 == 0) {
                echo "Buzz ";
            } else {
                echo $i . " ";
            }
        }

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

        // Activity 12: Reverse a String

        $inputString = "Hello"; 
        $reversedString = "";

        for ($i = strlen($inputString) - 1; $i >= 0; $i--) {
            $reversedString .= $inputString[$i];
        }
        echo "Input: \"$inputString\"\n";
        echo "Output: \"$reversedString\"\n";

    ?>
