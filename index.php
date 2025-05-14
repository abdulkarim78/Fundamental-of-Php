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
        echo 'Sum Of Num1 and Num2 :'.$addition."<br/>"; 

        $subtraction = $num1 - $num2; 
        echo 'Subtraction Of Num1 and Num2 :'.$subtraction."<br/>";

        $multiplication = $num1 * $num2;
        echo 'Multiplication Of Num1 and Num2 :'.$multiplication."<br/>";

        $division = $num1 / $num2;
        echo 'Divison Of Num1 and Num2 :'.$division."<br/>";
        
        $exponent = $num1 ** $num2;
        echo 'Exponent Of Num1 and Num2 :'.$exponent."<br/>";

        $modulus = $num1 % $num2;
        echo 'Modulus Of Num1 and Num2 :'.$modulus."<br/>";
      ?>
</body>
</html>