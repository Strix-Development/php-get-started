<?php


// PHP Logical Operators

// The PHP logical operators are used to combine conditional statements.



// Operator       Name	              Example                     	Result	
// and	          And	              $x and $y	                    True if both $x and $y are true	
// or	          Or	              $x or $y	                    True if either $x or $y is true	
// xor	          Xor	              $x xor $y	                    True if either $x or $y is true, but not both	
// &&	          And	              $x && $y	                    True if both $x and $y are true	
// ||	          Or	              $x || $y	                    True if either $x or $y is true	
// !	          Not	              !$x	                        True if $x is not true






//&&	 And	   $x && $y....................

//.................OR...................

//and	 And	   $x and $y...................	




$a= true && false;
var_dump($a);
echo "<br>";



$b=true && true;
var_dump($b);
echo "<br>";



$c=false && true;
var_dump($c);
echo "<br>";



$e=1;
$f=0;

var_dump($e && $f);
echo "<br>";



$r=1;
$v=2;

var_dump($r && $v);
echo "<br>";



$f=true;
$n=false;

var_dump($f and $n);
echo "<br>";










// or	     Or	         $x or $y............

//.................OR...................

// ||	     Or	         $x || $y.............



$a= true || false;
var_dump($a);
echo "<br>";


$b= true or false;
var_dump($a);
echo "<br>";


$x=4;
$y=0;

var_dump($x || $y);
echo "<br>";


$e=true;
$g=false;

var_dump($e or $g);
echo "<br>";


$k=true;
$l=true;

var_dump($k || $l);
echo "<br>";


$o=false;
$p=false;

var_dump($o || $p);
echo "<br>";


$q=40;
$r=0;

var_dump($q or $r);
echo "<br>";





// xor	        Xor	           $x xor $y...........................	  

$rar=false xor false;
var_dump($rar);
echo "<br>";



$tojo=true xor true;
var_dump($tojo);
echo "<br>";



$van=true xor false;
var_dump($van);
echo "<br>";



$car=1;
$cab=0;

var_dump($car xor $cab);
echo "<br>";








//  !	      Not	         !$x...................	



$a=40;
$b=10;

var_dump($a !== $b);
echo "<br>";


$c=false;
$d=10;

var_dump($c !== $d);
echo "<br>";


$h=10;
$j=10;

var_dump($h !== $j);
echo "<br>";



$x= true !== false;
echo $x ."<br>";


$a=false !== true;
echo $a ."<br>";


$b= false !== false;
echo $b ."<br>";


$c= true !== true;
echo $c ."<br>";


$d=10;
echo $d !== 100;
echo "<br>";


$eup=30;
echo $eup !== 30;








$fo=false && false != true;
var_dump($fo);
echo "<br>";


$vo=true && true;
var_dump($vo);


















?>