<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>More Basics</title>
</head>
<body>
    <div class=" p-5 container text-black-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <h1 class="p-2 bg-success rounded-3 text-white">MORE BASICS</h1>
    <?php
        // echo "More Basics";
        echo "<br>";
        echo "<hr>";

        // <====================IF-ELSE CONDITION===================>

        echo "<br>";
        echo "If-Else Condition :";
        echo "<br>";
        echo "<br>";
    
        $age=19;
        if($age>18)
        {
            echo "You are an adult";
            echo "<br>";
        }
        else if($age==17){
            echo "You are a teenager";
            echo "<br>";
        }
        else{
            echo "You are a child";
            echo "<br>";    
        }
        echo "<br>";
        echo "<hr>";
        echo "<hr>";

        
        // <====================ARRAY===================>

        $array=["denil ","jayeshbhai ","patel "];
        echo "Array :  ";

        //to print only first two elements of array using echo  
        echo $array[0];
        echo $array[1];
        echo $array[2];
        echo "<br>";
        echo "<br>";

        //to print full array using print_r
        echo "to print ful array using print_r :==========><br> ";        
        print_r($array);
        echo "<br>";
        echo "<br>";

        //to get the type of variable
        echo "to get the type of variable :==========><br> ";        
        print_r($array);
        echo "<br>";
        echo "Variable type is :  ",gettype($array);
        echo "<br>";

        echo "to get the type of variable : ";        
        echo $age;
        echo "<br>";
        echo "Variable type is :  ",gettype($age);
        echo "<br>";
        echo "<br>";

        //to count the element of array using count funtion
        echo "to count the element of array using count funtion :==========><br> ";        
        print_r($array);
        echo "<br>";
        echo "Array length is :  ",count($array);
        echo "<br>";
        echo "<br>";

        //to add element to array normal method where you can replace element on any place
        echo "to replace element on any place :==========><br>";
        print_r($array);
        echo"<br>";
        $array[1]="new element ";
        echo "After replacing element using normal method :  ";
        echo $array[0];
        echo $array[1];
        echo $array[2];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";

        //to add element to array normal method where you can add element on any place
        echo "to add element :==========><br>";
        print_r($array);
        echo"<br>";
        $array[]="new element ";
        echo "After adding new element using normal method :  ";
        echo $array[0];
        echo $array[1];
        echo $array[2];
        echo $array[3];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";
        
        //to remove specific element from array
        echo "to remove specific element :==========><br>";
        print_r($array);
        echo"<br>";
        unset($array[1]);
        echo "After removing second element using normal method :  ";
        echo $array[0];
        // echo $array[1];
        echo $array[2];
        echo $array[3];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";

        //length of array
        echo "lenth of the array after all operartions = ",count($array);
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo"<br>";

        //to add element to array at the beginning using array_unshift function
        echo "to add element to array at the beginning using array_unshift function :==========><br>";
        print_r($array);
        echo"<br>";
        array_unshift($array,"first element ");
        echo "After adding new element at the beginning using array_unshift function :  ";
        echo $array[0]; 
        echo $array[1];
        echo $array[2];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";
        
        //to remove first element from array
        echo"to remove first element from array :==========><br>";
        print_r($array);
        echo"<br>";
        array_shift($array);
        echo "After removing first element using array_shift function :  ";
        echo $array[0];
        echo $array[1];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";
        
        //to reverse the array using array_reverse
        echo "to reverse the array :==========><br>";
        echo "Before reversing the array :  ";
        print_r($array);
        echo "<br>";
        echo "After reversing the array :  ";
        $r=array_reverse($array);
        print_r($r);
        echo "<br>";
        echo "<br>";
        
        //to add element to array at the end using array_push function method-1
        echo "to add the element to array at the end using method-1 :==========><br>";
        print_r($array);
        echo "<br>";
        array_push($array," one ","two");
        echo "After adding new element at the end using array_push function method-1 :  ";
        echo $array[0];
        echo $array[1];
        echo $array[2];
        echo $array[3];
        echo $array[4];
        echo "<br>";
        print_r($array);
        echo "<br>";
        
        //to add element to array at the end using array_push function method-2
        echo "add the elemt to the end usng method-2 :==========><br>";
        $a=array("denil ");
        echo"<br>";
        echo "Before adding new element at the end using arry_push function :  ";
        echo "<br>";
        print_r($a);
        echo "<br>";
        array_push($a,"one "," two");
        echo "After adding new element at the end using array_push function method-2 :  ";
        echo $a[0];
        echo $a[1];
        echo $a[2];
        echo "<br>";
        print_r($a);
        echo "<br>";
        echo"<br>";
        
        //to remove last element from array using array_pop function
        echo "to remove last element from array :==========><br>";
        array_pop($array);
        echo "After removing last element using array_pop function :  ";
        echo $array[0];
        echo $array[1];
        echo $array[2];
        echo "<br>";
        print_r($array);
        echo "<br>";
        echo "<br>";

        echo "<hr>";
        echo "<hr>";

        // <====================FOR LOOP===================>
        
        echo "FOR LOOP :";
        echo "<br>";
        echo "<br>";
        
        //to print numbers from 0 to 9
        echo "Printing numbers from 0 to 9 using for loop :==========><br> ";
        for($i=0;$i<=9;$i++){
            echo $i;
            echo "<br>";
        }
        echo "<br>";
        
        // <====================WHILE LOOP===================>
        
        echo "WHILE LOOP :";
        echo "<br>";
        echo "<br>";
        
        //to print numbers from 0 to 9
        echo "Printing numbers from 0 to 9 using while loop :==========><br> ";
        $i=0;
        while($i<=9){
            echo $i;
            echo "<br>";
            $i++;
        }
        echo "<br>";
        
        // <====================DO-WHILE LOOP===================>
        echo "<br>";
        echo "DO-WHILE LOOP :";
        echo "<br>";

        //to print numbers from 0 to 9
        echo "Printing numbers from 0 to 9 using do-while loop :==========><br> ";
        $i=50;
        do{
            echo $i;
            echo "<br>";
            $i++;
        }while($i<=9);
        echo "<br>";
        
        // <====================FUNCTION===================>
        echo "<br>";
        echo "FUNCTION :";
        echo "TWO TYPE OF FUNCTION : 1. BUILT-IN , 2.USER-DEFINE ";
        echo "<br>";
        
        //function to print numbers from 0 to 9
        function deni(){
            $deni="Denil Jayeshbhai Patel";
            echo $deni;
        }
        deni();
        echo "<br>";

        //function to print numbers from user

        function deni_user($num){
            echo "Your Number Is :";
            echo $num;
        }
        deni_user(10);
        echo "<br>"; 

        // // <====================RETURN===================>
        // echo "<br>";
        // echo "RETURN :";
        // echo "<br>";
        // echo "<br>";
        
        // //function to return sum of two numbers



    ?>
    </div>
</body>
</html>