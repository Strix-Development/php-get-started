<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <!-- SCOPE OF VARIABLE -->
   <?php
    // global variable
   $x = 5; 
    function Test() {
   // echo "$x";           using x inside this function will generate an error 
   } 
   echo "<br>";
   Test();
   echo " value of x is $x<br>";


   require_once __DIR__."/localscope.php";
?>
   















