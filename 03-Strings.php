<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Strings</title>
</head>
<body>
    <div class=" p-5 container text-black-emphasis bg-primary-subtle border border-primary-subtle rounded-3">
        <h1 class="p-2 bg-success rounded-3 text-white">Strings</h1>
    <?php
    
    // define string 
    echo "define string ==========> : ";
    $str = "denil";
    echo $str;
    echo "<br>";
    
    // string length
    echo "Length of the string : ",strlen($str);
    echo "<br>";

    // string word count
    echo "Word count of the string : ",str_word_count($str);
    echo "<br>";

    // reverse string  
    echo "Reversed string : ",strrev($str);
    echo "<br>";

    //string positon
    echo "Position of 'l' : ",strpos($str, 'l');
    echo "<br>";

    // string replacement
    echo "Replaced string is : " . str_replace("l", "i", $str) . "  :   where l is replaced by i";
    echo "<br>";
    
    // string to lowercase
    echo "To lowercase string : ",strtolower($str);
    echo "<br>";
    
    // string to uppercase
    echo "To uppercase string : ",strtoupper($str);
    echo "<br>";
    
    // string trim (remove leading and trailing white spaces)
    echo "Trimmed string : ",trim($str);
    echo "<br>";
    
    // string substring
    echo "Substring from 2nd index to 5th index : ",substr($str, 2, 5);
    echo "<br>";
    
    // string substring (with negative length)
    echo "Substring from 2nd index to end : ",substr($str, 2);
    
    // string concatenation
    echo "<br>concatination of 2 strings =========>";
    $str1 = "hello";
    $str2 = "world";
    echo $str1." ".$str2;
    echo "<br>";
    
    // string comparison
    echo "string comparison : ";
    $str4 = "Hello";
    $str5 = "Hello";
    echo $str4 == $str5;
    echo "<br>";
    
    // string to array
    $str6 = "Hello, World!";
    echo implode(" ", explode(",", $str6));
    echo $str6[3];
    echo "<br>";
    
    
    // string to array (with custom separator)
    
    
    ?>
</body>
</html>