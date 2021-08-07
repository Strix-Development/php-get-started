<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
   echo "hello world";
   //php variable
   $name ="kirti"
   $NAME ="kiran"
   echo "$name";
   echo "$NAME";
   echo "this is the php script"
   ?>     

         
<!-- START VARIABLE IS HERE
php me jaise hi value assign krte h vaise hi automatically datatype 
usKO ASSIGN KR DETA HAI

PHP VARIABLE RULES
 1  variable starts with the $ sign, followed by the name of the variable
 2  variable name must start with a letter or the underscore character
 3  variable name cannot start with a number
 4  variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 5   Variable names are case-sensitive ($age and $AGE are two different variables)-->
<?php
$name = "kirti";
$salary = 100;
echo "$name is a employee and her salary is $salary";
echo"<br>";
?>



<!-- scope of variable -->
<?php
// global variable
$x = 5; 

 function myTest() {
 echo " value of x is $x";           // using x inside this function will generate an error 
} 
echo "<br>";
myTest();
echo " value of x is $x";


//local variable
function myTest() {
    $x = 5; 
 echo " value of x is $x";           
} 
echo " value of x is $x";   // outside function it will generate error



//The global keyword is used to access a global variable from within a function.
$x = 5;
$y = 10;
function Test() {

  global $x, $y;
  $y = $x + $y;
}
echo "$y";
?>



//USE ECHO AND PRINT FOR OUTPUT
<?php
echo "<h2>PHP is Fun!</h2>";
echo "Hello world!<br>";
echo "I'm about to learn PHP!<br>";
echo "This ", "string ", "was ", "made ", "with multiple parameters.";
?> 

</body>
</html>










