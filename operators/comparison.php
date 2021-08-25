<?php

//Operators are used to perform operations on variables and values.

// Comparison Operators



// Example	            Name        	                Result
// $a == $b  	        Equal	                        true if $a is equal to $b after type juggling.
// $a === $b	        Identical	                    true if $a is equal to $b, and they are of the same type.
// $a != $b 	        Not equal	                    true if $a is not equal to $b after type juggling.
// $a <> $b	            Not equal	                    true if $a is not equal to $b after type juggling.
// $a !== $b	        Not identical	                true if $a is not equal to $b, or they are not of the same type.
// $a < $b              Less than	                    true if $a is strictly less than $b.
// $a > $b   	        Greater than	                true if $a is strictly greater than $b.
// $a <= $b  	        Less than or equal to	        true if $a is less than or equal to $b.
// $a >= $b 	        Greater than or equal to	    true if $a is greater than or equal to $b.
// $a <=> $b	        Spaceship	                    An int less than, equal to, or greater than zero when $a is less than, equal to, or greater than $b, respectively.




//Equal $a == $b..........................


$x=400;
$y=400;

var_dump($x==$y);
echo "<br>";


$a=200;
$b=100;

var_dump($a==$b);
echo "<br>";


$c=1000;
$d=1000;

var_dump($c==$d);
echo "<br>";



//Identical $a === $b.......................................



$a=40;
$b=40;

var_dump($a===$b);
echo "<br>";


$c=40;
$d='yo';

var_dump($c===$d);
echo "<br>";


$e="tarro";
$f="40";

var_dump($e===$f);
echo "<br>";


$g="yolo";
$h="yolo";

var_dump($g===$h);
echo "<br>";


//Not equal $a != $b................................
//or we can write not equal like this <>




$a=40;                                    // returns true because values are not equal
$b=20;

var_dump($a !=$b);
echo "<br>";



$c="440";                                // returns false because values are equal
$d="440";

var_dump($c !=$d);
echo "<br>";



$e="hoho";
$f="hoho";
                                       // returns false because values are equal
var_dump($e !=$f);
echo "<br>";



//Not identical $a !== $b..........................


$x=400;
$y="500";
                                       // returns true because types are not equal
var_dump($x !==$y);
echo "<br>";



$a=100;
$b=100;                                 // returns false because types are equal

var_dump($a !==$b);
echo "<br>";



$c="jojo";
$d="jojo";                               // returns false because values and types are equal

var_dump($c !==$d);
echo "<br>";







//Less than $a < $b...................




$a=40;
$b=50;
                                        // returns true if $a is less than $b
var_dump($a < $b);
echo "<br>";



$c=90;
$d=70;
                                       // returns false if $a isn't less than $b
var_dump($c < $d);
echo "<br>";




$e=400;
$f=500;
                                       // returns true if $a is less than $b            
var_dump($e < $f);
echo "<br>";





//Greater than  $a > $b ..........................


$x=700;
$y=500;
                                       // returns true if $x is greater than $y
var_dump($x > $y);
echo "<br>";




$h=400;
$f=600;
                                      // returns false if $h isn't greater than $f
var_dump($h > $f);
echo "<br>";




$v=1000;
$z=800;
                                      // returns true if $v is greater than $z
var_dump($v > $z);
echo "<br>";





//Less than or equal to $a <= $b



$x=100;
$y=200;
                                     // returns true if $x is less than $y or if $x is equal to $y
var_dump($x <=$y);
echo "<br>";



$a=700;
$b=700;
                                     // returns true if $x is less than $y or if $x is equal to $y
var_dump($a <=$b);
echo "<br>";




$f=700;
$g=500;
                                     // returns false if $f isn't less than $g or if $f isn't equal to $g
var_dump($f <=$g);
echo "<br>";





//Greater than or equal to $a >= $b...............................



$x=400;
$y=300;
                                    // returns true if $x is greater than $y or if $x is equal to $y
var_dump($x >=$y);
echo "<br>";



$a=800;
$b=800;
                                    // returns true if $a is greater than $b or if $a is equal to $b
var_dump($a >=$b);
echo "<br>";



$c=400;
$d=500;
                                    // returns false if $c isn't greater than $d or if $c isn't equal to $d
var_dump($c >=$d);
echo "<br>";




//Spaceship	$a <=> $b................................	



$x=50;
$y=70;
                                    // returns -1 because if $x is less than $y
var_dump($x <=> $y);
echo "<br>";



$a=500;
$b=500;
                                    // returns 0 because if $a is equal to $b
var_dump($a <=> $b);
echo "<br>";



$c=2000;
$d=1000;
                                    // returns +1 because if $c is greater than $d
var_dump($c <=> $d);
echo "<br>;"


?>