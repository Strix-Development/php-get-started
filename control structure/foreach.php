

<?php

/*
TWO TYPES OF SYNTAX FOR FOREACH ARE:-
foreach (iterable_expression as $value)
    statement
foreach (iterable_expression as $key => $value)
    statement  */


// 1:: EXAMPLE OF FOREACH LOOP
$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo "$value <br/>";
    echo "<br>";
}



// 2:: EXAMPLE OF FOREACH LOOP ONLY PRINT VALUE
$array = array(
    'name'=> 'kirti',
    'class'=>12,
    'mail'=> 'rajputkirti234@gmail.com'
);
    foreach($array as $value){
        echo $value;
        echo "<br>";
    }
    echo "<br>";



// 3:: EXAMPLE OF FOREACH LOOP AND PRINT $KEY AND $VALUE BOTH
$arr = array(
    'name'=>'himanshu',
    'class'=> 12,
    'email'=> 'rajputhim12@gmail.com',
    'roll no'=>34
);
foreach($arr as $key=> $value){
    echo "$key => $value";
    echo "<br>";
}
echo "<br>";




// 4:: EXAMPLE OF FOREACH LOOP FOR MULTIDIMENSIONAL ARRAY
$a = array();    //multidimensinal array
$a[0][0] = "Alex";  
$a[0][1] = "Bob";  
$a[1][0] = "Camila";  
$a[1][1] = "Denial";  
  
//display multi-dimensional array elements through foreach loop  
foreach ($a as $value1) {  
    foreach ($value1 as $value2) {  
        echo "$value2";
        echo "<br>";  
    }  
}  
echo "<br>";




// 5:: EXAMPLE OF FOREACH LOOP 
   //dynamic array  
    foreach (array ('j', 'a', 'v', 'a', 't', 'p', 'o', 'i', 'n', 't') as $elements) {  
        echo "$elements";
        echo "<br>";  
    }  
echo "<br>";
// ARRAY CONSTANT IN PHP
define("cars",['maruti-suzuki','mg-hector','creta','venue']);
echo cars[1];
echo "<br>";

//CONSTANT ARE GLOBAL
define("GREETING","good-morning");  //constant
function myFun(){
    echo GREETING;
}
myFun();
?>