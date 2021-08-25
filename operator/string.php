<?php

//STRING OPERATOR
//concatination 
$txt1 = "hi";
$txt2 = " hello";
echo $txt1.$txt2;
echo "<br>";

// concatination assignment
$txt3 = "one";
$txt4 = "two";
$txt3 .= $txt4;
echo $txt3;
 echo "<br>";
echo $txt4;
echo "<br>";

//example
$d = 'a';
$b = 'b';
$d .=$b .= 'foo';
echo  $d."<br>".$b ;
echo "<br>"; 




//require_once __DIR__."/array operator.php";

?>