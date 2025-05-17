<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php</title>
</head>
<body>
    <?php
        // Create Variable 
        $num = 10;
        $name = "Ali";
        $boolean = true;


        // Print All Above Variable 

        echo "Number :"." ".$num."<br/>";
        echo "Name :"." ".$name."<br/>";
        echo "Boolean :"." ".$boolean."<br/>"."<br/>";
    
        // Arithmetic Operator

        $num1 = 5;
        $num2 = 5;

        $addition = $num1 + $num2;
        echo 'Sum Of Num1 and Num2 : '.$addition."<br/>"; 

        $subtraction = $num1 - $num2; 
        echo 'Subtraction Of Num1 and Num2 : '.$subtraction."<br/>";

        $multiplication = $num1 * $num2;
        echo 'Multiplication Of Num1 and Num2 : '.$multiplication."<br/>";

        $division = $num1 / $num2;
        echo 'Divison Of Num1 and Num2 : '.$division."<br/>";
        
        $exponent = $num1 ** $num2;
        echo 'Exponent Of Num1 and Num2 : '.$exponent."<br/>";

        $modulus = $num1 % $num2;
        echo 'Modulus Of Num1 and Num2 : '.$modulus."<br/>"."<br/>";


        // Assignment Operators

        $num += 1;
        echo "Adding One By Assignment Operator: ".$num."<br/>";
        
        $num -= 2;
        echo "Subtracting 2 By Assignment Operator : ".$num."<br/>";
        
        $num *= 2;
        echo "Multipling 2 By Assignment Operator : ".$num."<br/>";
        
        $num /= 9;
        echo "Dividing 9 By Assignment Operator : ".$num."<br/>";
        
        $num %= 2;
        echo "Modulus 2 By Assignment Operator : ".$num."<br/>"."<br/>";
        
        // Conditional Statement

        $age = 18;         

        if($age > 18){
            echo "Your Age is ".$age." You can Vote!"."<br/>"."<br/>";
        }
        elseif($age === 18){
            echo "It Your Choice You Want to Vote Or Not"."<br/>"."<br/>";
        }
        else{
            echo "Your Age is ".$age." You aren't able to Vote!"."<br/>"."<br/>";
        }

        // Switch Statement
        
        $day = "Monday";
        switch($day){
            case "Monday":
                echo "Today is Monday"."<br/>"."<br/>";
                break;

            case "Tuesday":
                echo "Today is Tuesday";
                break;

            case "Wednesday":
                echo "Today is Wednesday";
                break;

            case "Thursday":
                echo "Today is Thursday";
                break;

            case "Friday": 
                echo "Today is Friday";
                break;

            case "Saturday":
                echo "Today is Saturday";
                break;

            default:
                echo "Today is Sunday";
                break;
        } 

        // For Loop

        for($i=0; $i<=10 ; $i++){
            echo $i."<br/>";
        }

        // While Loop
        
        $i = 0;
        while($i <= 5){
            echo $i."<br/>";
            $i++;
        }

        // Do While Loop

        $i = 1;

        do {
            echo $i."<br/>";
            $i++;
        } while ($i < 6);

        // For Each
        
        $color = array("Red","Yellow","Blue","Pink");
        foreach($color as $i){
            echo $i."<br/>";
        }

        // Function

        function greet(){
            echo "Hello World";
        }
      ?>
</body>
</html>