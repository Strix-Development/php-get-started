<?php

//LOGICAL OPERATOR
//AND OPERATOR : True if both $x and $y are true.
// true -> true = true and other all are false.
$k = 100;
$v = 40;
if($k==100 and $v==40){
echo "condition is true";
}
else
{
echo "condition is false";
}
echo "<br>";




//(&&) operator :- {(&&) ,and} both are same but the precedence of (&&)is high as cmpr to (and). 
$x = 100;  
$y = 50;
if ($x == 300 && $y == 50){
    echo "hello world";
}
else
{
    echo "wrong";
}
echo "<br>";




// OR OPERATOR :True if either $x or $y is true.
// false -> false = false and other all are true.
$m = 400;
$o = 230;
if($m==400 or  $o==200){
echo "hi";
}
echo "<br>";


// (||) operator
$m = 200;
$o = 100;
if($m==100 ||  $o==150){
echo "hi";
}
else 
{
    echo "not";
}
echo "<br>";



//xor operator:True if either $x and $y are true but not both
// true->true=false,  false->false=false, true->false=true  , false->true=true
$m = 400;
$o = 230;
if($m==400  xor  $o==200){
echo "hi";
}
echo "<br>";



// (!)operator
$x = 100;  
if ($x != 90) {
    echo "Hello world!";
}
echo "<br>";



require_once __DIR__."/string.php";
?>






