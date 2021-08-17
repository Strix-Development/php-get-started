<?php

//Operators are used to perform operations on variables and values.

// ARITHMETIC OPERATOR:-PERFORM VARIOUS ARITHMETIC OPERATION
echo 3+5;
echo "<br>";
echo 4-5;
echo "<br>";
echo 4*4;
echo "<br>"; 
echo 20/4;  //quotent
echo "<br>";
echo 20%4;   //remainder  (MODULUS IS HIGH PRECEDENCE AS COMPARE TO DIVISION)
echo "<br>";



//ASSIGNMENT OPERATOR:- IT ASSIGN VALUE TO VARIABLE
//ARITHMETIC ASSIGNMENT OPERATOR
/*$a += $b	$a = $a + $b	Addition
$a -= $b	$a = $a - $b	Subtraction
$a *= $b	$a = $a * $b	Multiplication
$a /= $b	$a = $a / $b	Division
$a %= $b	$a = $a % $b	Modulus
$a **= $b	$a = $a ** $b	Exponentiation*/
/* BITWISE ASSIGNMENT OPERATOR
a &= $b	$a = $a & $b	Bitwise And
$a |= $b	$a = $a | $b	Bitwise Or
$a ^= $b	$a = $a ^ $b	Bitwise Xor
$a <<= $b	$a = $a << $b	Left Shift
$a >>= $b	$a = $a >> $b	Right Shift*/
/* OTHER ASSIGNMENT OPERATOR
$a .= $b	$a = $a . $b	String Concatenation
$a ??= $b	$a = $a ?? $b	Null Coalesce*/
$a = ($b=4)+3;
echo $a;
echo "<br>";
//EXAMPLE
$a = 2;
$a += 6;
echo $a;
echo "<br>";
//EXAMPLE
$a = 3;
$b = &$a;   // $b is a reference to $a
print "$a";   // prints 3
echo "<br>";
print "$b";
echo "<br>";

//example
$d = 'a';
$b = 'b';
$d .=$b .= 'foo';
echo  $d."<br>".$b ;
echo "<br>";
//ASSIGNMENT OPERATOR ADDITION
$i = 10;
$i += 100;
echo $i;
echo "<br>";
//ASSIGNMENT OPERATOR SUBSTRACTION
$j = 100;
$j -= 10;
echo $j;
echo "<br>";
//ASSIGNMENT OPERATOR MULTIPLICATION
$k = 30;
$k *= 2;
echo $k;
echo "<br>";
//ASSIGNMENT OPERATOR DIVISION
$l = 100;
$l /= 10;
echo $l;    //quotent
echo "<br>";
//ASSIGNMENT OPERATOR MODULUS
$m = 100;
$m %= 10;
echo $m;    //remainder
echo "<br>";



//COMPARISION OPERATOR

//EQUAL (==) OPERATOR
$n = 100;
$o = 100;
echo ($n==$o);
echo "<br>";
var_dump($n==$o);
echo "<br>";

//IDENTICAL OPERATOR
$n = 200;
$o = 300;









//BITWISE AND OPERATOR
$values = array(1,2,4,6);
$test = 1+4;

foreach($values as $value){
    $result = $value & $test;
    echo($result . $value . '&' . $test);
}
?>