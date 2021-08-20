<?php

//COMPARISION OPERATOR
//EQUAL (==) OPERATOR :- value of n and value of o is equal or not
$n = 100;
$o = 100;
var_dump ($n==$o); //true
echo "<br>";

$r = 100;
$s = "100";
var_dump($r==$s);  //true
echo "<br>";


//IDENTICAL OPERATOR (===):- it tells the type of the data type both of n and o is not same type its value is false
// IDENTICAL CHECK VALUE AND TYPE ALSO
$n = 200;
$o = "200";
var_dump($n===$o); //false
echo "<br>";

$p = 10;
$q = 10;
var_dump($p===$q); //true
echo "<br>";


//NOT EQUAL TO (!= , <>):- true value of t is not eqal to value of u.
$t = 200;
$u = 300;
var_dump ($t != $u); //true
echo "<br>";

$t = 300;
$u = 300;
var_dump ($t <> $u); //false
echo "<br>";

//NOT IDENTICAL (!==):- TYPE OF ONE VAR IS NOT SAME TO OTHER VAR.
$v = 200;
$w = "200";
var_dump($v !== $w);
echo "<br>"; //true

$v = "200";
$w = "200";
var_dump($v !== $w);
echo "<br>"; //false


//greater than :- value of one variable is greater than other then result is true
$x = 500;
$y = 200;
echo ($x > $y);
echo "<br>"; //true

//less than :- value of one variable is less than other then result is true
$x = 200;
$y = 600;
echo ($x < $y);
echo "<br>"; //true

//greater than equal-to:- value of one variable is greater than and equal to other then result is true
$x = 500;
$y = 200;
echo ($x >= $y);
echo "<br>";  //true

$x = 700;
$y = 700;
echo ($x >= $y);
echo "<br>";  //true



//less than equal-to:- value of one variable is less than and equal to other then result is true
$x = 900;
$y = 1200;
var_dump($x <= $y);
echo "<br>";  //true

$x = 900;
$y = 1200;
var_dump($x <= $y);
echo "<br>";  //true


//spaceship:-
$e = 200;
$f = 400;
echo ($e <=> $f);
echo "<br>";    // output -1

$g = 400;
$h = 400;
echo ($g <=> $h);
echo "<br>";  // out put 0

$g = 800;
$h = 600;
echo ($g <=> $h);
echo "<br>";  // out put 1

require_once __DIR__."/error control.php";

?>