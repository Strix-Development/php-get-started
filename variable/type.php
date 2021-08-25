<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<!-- START VARIABLE IS HERE
php me jaise hi value assign krte h vaise hi automatically datatype 
usKO ASSIGN KR DETA HAI-->
<?php
  $name ="kirti";
   $NAME ="kiran";
   echo "$name<br>";
   echo "$NAME<br>";
   echo "this is the php script <br>"
   ?>     

<!--PHP VARIABLE RULES
 1  variable starts with the $ sign, followed by the name of the variable
 2  variable name must start with a letter or the underscore character
 3  variable name cannot start with a number
 4  variable name can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
 5   Variable names are case-sensitive ($age and $AGE are two different variables)-->
<?php
$name = "kirti";
$salary = 100;
echo "$name is a employee and her salary is $salary <br>";

require_once __DIR__."/scope.php";
?> 
</body>
</html>