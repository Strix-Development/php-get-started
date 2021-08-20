<?php

// UNION ARRAY OPERATOR (+):- UNION OF $A AND $B
$a = array('rahul'=>500, 'sonam'=>300 , 'aksahy'=>400);
$b = array('rahul'=>'php', 'sonam'=>'python' , 'aksahy'=>'java','ritik'=>'html','john'=>'css');
$result = $a + $b;
print_r($result);
echo "<br>";




//EQUALITY ARRAY OPERATOR($A==$B);- true if $a and $b have same KEY/VALUE pair and ORDER DOES NOT MATTER
$bc = array('kirti'=>200,'manshvi'=>400,'isha'=>600);
//$de = array('kirti'=>200,'manshvi'=>400,'isha'=>600);
//$de = array('manshvi'=>400,'kirti'=>200,'isha'=>600);  // ORDER DOES NOT MATTER
$de = array('kirti'=>'php','manshvi'=>'python','isha'=>'java'); //KEY VALUE PAIR IS DIFFERENT
if ($bc == $de){
    echo "both array key/value pair true";
}
else{
    echo "key value pair false";
}
echo "<br>";





//inequality array operator:-(!=),(<>) TRUE IF $A IS NOT EQUAL TO $B and not same key/value pair 
$h = array('kirti'=>200,'manshvi'=>400,'isha'=>600);
$p = array('kirti'=>'php','manshvi'=>'python','isha'=>'java');//different key/value pair and order does not matter
if ($h != $p){
    echo "true";
}
else{
    echo "false";
}
echo " <br>";


//IDENTITY ARRAY OPERATOR ($A===$B):-true if $a and $b have same (KEY/VALUE) pair
// AND THE (SAME ORDER) (type)same
$v = array('radha'=>200,'manvi'=>400,'rekha'=>600);
$k = array('radha'=>200,'manvi'=>400,'rekha'=>600);
if ($v === $k){
    echo "both array key/value pair true";
}
else{
    echo "key value pair false";
}
echo " <br>";

//non-identity ARRAY OPERATOR(!==): TRUE IF $A IS NOT IDENTICAL TO $B
//true if key/value pair is different,order differnt