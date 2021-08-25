<?php




// Operator	    Name	         Example	    Result	
// +	        Union	         $x + $y	    Union of $x and $y	
// ==	        Equality	     $x == $y	    Returns true if $x and $y have the same key/value pairs	
// ===	        Identity	     $x === $y	    Returns true if $x and $y have the same key/value pairs in the same order and of the same types	
// !=	        Inequality	     $x != $y	    Returns true if $x is not equal to $y	
// <>	        Inequality	     $x <> $y	    Returns true if $x is not equal to $y	
// !==	        Non-identity	 $x !== $y	    Returns true if $x is not identical to $y




// +  Union  $x + $y...............


$a = array('a' => 'apple', 'b' => 'red', 'c' => 'banana', 'd' => 'yellow');
$b = array('e' => 'grapes', 'f' => 'green', 'g' => 'orange', 'h' => 'orange');
print_r($a + $b);
echo "<br>";



$c = array('a' => 'car', 'b' => 'bus', 'c' => 'bike');
$d = array('d' => 'plane', 'e' => 'train', 'f' => 'scooter');
print_r($c + $d);
echo "<br>";



$e = array('a' => 'car', 'b' => 'bus', 'c' => 'bike');
$f = array('d' => 'plane', 'e' => 'train', 'f' => 'scooter');
$g = array('g' => 'car', 'h' => 'bus', 'i' => 'bike');
$h = array('j' => 'plane', 'k' => 'train', 'l' => 'scooter');
print_r($e + $f + $g + $h);
echo "<br>";



$i = array('a' => 'car', 'b' => 'bus', 'c' => 'bike');
$j = array('d' => 'plane', 'e' => 'train', 'f' => 'scooter');
$k = array('g' => 'car', 'h' => 'bus', 'i' => 'bike');
$l = array('j' => 'plane', 'k' => 'train', 'l' => 'scooter');
$m = array(1 => 'grapes', 2 => 'green', 3 => 'orange', 4 => 'orange');
$n = array(5 => 'car', 6 => 'bus', 7 => 'bike');
$o = array(8 => 'plane', 9 => 'train', 10 => 'scooter');
$p = array(11 => 'grapes', 12 => 'green', 13 => 'orange', 14 => 'orange');
$q = array(15 => 'car', 16 => 'bus', 17 => 'bike');
$r = array(18 => 'plane', 19 => 'train', 20 => 'scooter');
print_r($i + $j + $k + $l + $m + $n + $o + $p + $q + $r);
echo "<br>";











?>


