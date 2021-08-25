<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    //STRING FUNCTION
     //strlen() tells the length of the function
     $name = "kirti";
     echo strlen($name);
     echo "<br>";


     //str_word_count() tells the number of the word
     $msg = "hello how are you";
     echo str_word_count($msg);
     echo "<br>";

     //strrev function:- reverse the string
     $nam = "kirti thakur";
     echo strrev($nam);
     echo "<br>";


     //replace() :- replace text with string
     echo str_replace("hlo","world","hello good!");
     echo "<br>";


     //strpos():- search the text in the string
     echo strpos("hi this is me","this");
     echo "<br>";


     //var_dump() :- tells the type and value of variable
     $a = "value";
     echo var_dump($a);
     echo "<br>";
    
     //gettype() :- tells the only type of the variable
     $b = "kashish";
     echo gettype($b);
     echo "<br>";

    // PHP NUMBER
     // is_int() :- chek if the type of the variable is integer or not
      $c = 1234;
      echo var_dump(is_int($c));
      echo "<br>";
      echo var_dump(is_long($c));
      echo "<br>";


      //is_float()  :- check if the type of the variable is float
      $d = 1234.567;
      echo var_dump(is_float($d));





      //PHP MATH_FUNCTION
       //1  PHP PI():- it return the value of pi
      echo(pi());
      echo "<br>";

      //2  php min() and max():-
      //min() :- min() returns the minimum value
       echo(min(129,23,45,0,-34,56,45,-59));
       echo "<br>";

      //max() :- max() returns the maximum value
      echo(max(234,45,67,89,544));
      echo "<br>";


      // abs() :- tells the +ve value
      $a = -12345.677;
      echo(abs($a));
      echo "<br>";


      //sqrt() :- it tells the value of sqr root
      echo(sqrt(81));
      echo "<br>";
  

      //round() :- it tells the round value (0.50->1)(o.49->0)(0.60->1)
      echo(round(23.49));
      echo "<br>";
      echo(round(23.57));
      echo "<br>";
      echo(round(0.67));
      echo "<br>";
      echo(round(0.49));
      echo "<br>";


      //random() :- it tells any random number
      echo(rand());
      echo "<br>";

      require_once __DIR__."/constant.php";

      ?>






    



</body>
</html>