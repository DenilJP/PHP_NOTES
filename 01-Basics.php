
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basics Of PHP</title>
</head>
<body>
    <div class="container">
        echo"hello world";<br>
        <?php
        echo"hello world";
        // single line comment
        /* multi
        line 
        comment */

        // declare variable
        echo "<br>";
        $v1=25;
        echo $v1;
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        
        // arithmetic operations
        echo "Arithmetic Operations :";
        echo "<br>";
        echo "<br>";
        // sum
        $v1 = 10;
        $v2 = 20;
        echo "The sum of v1=10 and v2=20 is : ";
        echo $v1 + $v2;
        echo "<br>";
        
        // difference
        echo "The difference of v1=10 and v2=20 is : ";
        echo $v1 - $v2;
        echo "<br>";

        // multiplication   
        echo "The product of v1=10 and v2=20 is : ";
        echo $v1 * $v2;
        echo "<br>";
        
        // division
        echo "The division of v1=10 and v2=20 is : ";
        echo $v1 / $v2; 
        echo "<br>";
        
        // modulo
        echo "The remainder of v1=10 divided by v2=20 is : ";
        echo $v1 % $v2;
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        //assignment operator
        echo "Assignment Operator :";
        echo "<br>";
        echo "<br>";
        $v3 = $v1;
        echo "The value of v3 is : ";
        echo $v3;
        echo "<br>"; 
        $v3 += 1;
        echo "The value of v3=10 after increment is : ";
        echo $v3;
        echo "<br>";
        $v3 -= 1;
        echo "The value of v3=11 after decrement is : ";
        echo $v3;
        echo "<br>";
        $v3 *= 2;
        echo "The value of v3=10 after multiplication is : ";
        echo $v3;
        echo "<br>";
        $v3 /= 2;
        echo "The value of v3=20 after division is : ";
        echo $v3;
        echo "<br>";
        $v3 %= 2;
        echo "The value of v3=10 after modulo is : ";
        echo $v3;
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        // comparison operation
        echo "Comparison Operator :";
        echo "<br>";
        echo "<br>";
        $v4 = 15;
        echo "Is v4 greater than v1? : ";
        echo $v4 > $v1;
        echo "<br>";
        echo "Is v4 less than v1? : ";
        echo $v4 < $v1;
        echo "<br>";
        echo "Is v4 equal to v1? : ";
        echo $v4 == $v1;
        echo "<br>";
        echo "Is v4 not equal to v1? : ";
        echo $v4!= $v1;
        echo "<br>";
        echo "Is v4 greater than or equal to v1? : ";
        echo $v4 >= $v1;
        echo "<br>";
        echo "Is v4 less than or equal to v1? : ";
        echo $v4 <= $v1;
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        // increment and decrement opertions
        echo "Increment and Decrement Operator :";
        echo "<br>";
        echo "<br>";
        $v5 = 10;
        echo "The value of v5 is : ";
        echo $v5;
        echo "<br>";
        $v5++;
        echo "The value of v5++ after increment is : ";
        echo $v5;
        echo "<br>";
        $v5--;
        echo "The value of v5-- after decrement is : ";
        echo $v5;
        echo "<br>";

        ++$v5;
        echo "<br>";
        echo "The value of ++v5 after increment is : ";
        echo $v5;
        echo "<br>";
        --$v5;
        echo "The value of --v5 after decrement is : ";
        echo $v5;

        echo "<br>";
        echo "<hr>";
        echo "<br>";
        
        // logical operation
        echo "Logical Operator :";
        echo "<br>";
        echo "<br>";
        $v6 = true;
        echo "v6 :",$v6;
        echo "<br>";
        $v7 = false;
        echo "v7 :",$v7;
        echo "<br>";
        echo "Is v6 true? : ";
        echo $v6;
        echo "<br>";
        echo "Is v7 false? : ";
        echo $v7;
        echo "<br>";
        echo "Is v6 and v7 both true? : ";
        echo $v6 && $v7;
        echo "<br>";
        echo "Is v6 or v7 true? : ";
        echo $v6 || $v7;
        echo "<br>";
        echo "Is v6 not v7 true? : ";
        echo !$v7;
        echo "<br>";
        echo "Is v6 xor v7 true? : ";
        echo $v6 xor $v7;
        echo "<br>";
        echo "<hr>";
        echo "<br>";

        // datatype
        echo "Data Type :";
        echo "<br>";
        echo "<br>";
        $var = "Hello";
        echo "Variable type is : ",$var," > string";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
                echo "<br>";

        $var = 25;
        echo "Variable type is : ",$var," > integer";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
                echo "<br>";

        $var = 25.5;
        echo "Variable type is : ",$var," > double";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
                echo "<br>";
                
        $var = true;
        echo "Variable type is : ",$var," > boolean";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
                echo "<br>";

        $var = array(1,2,3,4,5);
        echo "Array :",$var[0]; echo $var[1]; echo $var[2]; echo $var[3]; echo $var[4];
        echo "<br>"; 
        print_r($var);
        echo "Variable type is : " ,"array";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
                echo "<br>";

        $var = null;
        echo "Variable type is : ",$var, ">Null";
        echo "<br>";
                // vardump
                echo "Var Dump :";
                echo "<br>";
                echo var_dump($var);
                echo "<br>";
        echo "<hr>";
        echo "<br>";

        // Define Constant
        define("pi",3.14);
        echo "pi value is : ",pi;
        echo "<br>";
        define("denil",1);
        echo "denil value is : ",denil;

        echo "<hr>";
        echo "<br>";
        ?>
    </div>
</body>
</html>