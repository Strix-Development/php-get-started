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







//  1:: BREAK STATEMENT EXAMPLE (FOR)
for($i=1; $i<=5; $i++){
 if($i == 3){  // $i value is 3 then (3==3) and then stop ho jayega code
        break;
    }
    echo "$i";
    echo "<br>";
    }
    echo "<br>";



 // 2 :: EXAMPLE OF BREAK STATEMENT (ARRAY)
    $arr = array('ram','shyam','reeta','sumit');
    foreach($arr as $value){
        if($value == 'reeta'){
            break;       // because of break array stoping for reeta and print only ram,shyam.
        }
        echo "$value" ;
        echo "<br>";
    }
    echo "<br>";


// 3:: EXAMPLE FOR BREAK  STATEMENT (WHILE)
 $i = 0;
 while($i<=5){
     if($i == 4){
         break;
     }
     echo "$i";
     echo "<br>";
     $i++;
 }
 echo "<br>";



 // 4:: example for break statement (DO-WHILE)
 $i = 1;
 do{
     echo "$i";
     echo "<br>";
     $i++;
     if($i == 4){
         break;
     }
 }while($i<=6);
echo "<br>";





    


    // 1:: EXAMPLE OF CONTINUE STATEMENT (FOR LOOP)
    for($i=1; $i<=5; $i++){
        if($i == 2){   // 2 skip because of continue statement
            continue;
        }
        echo "$i";
        echo "<br>";
    }
    echo "<br>";
    

// 2:: EXAMPLE OF CONTINUE STATEMENT  (ARRAY)
    $arr = array('banana','apple','orange','grapes');
    foreach($arr as $val){
        if($val == 'orange'){
            continue;
        }
        echo "$val";
        echo "<br>";
    }
    echo "<br>";
    

    // EXAMPLES OF SWITCH STATEMENT
    $date = 30;
    switch($date)
    {
        case 10:
            echo "c programming";
            break;
        case 15:
            echo "c++ programming";
             break;
         case 20:
            echo "java programming";
            break;
         case 30:
            echo "php programming";
            break;
         case 40:
            echo "html and css";
            break;      
         case 50:
             echo "python programming";
             break;   
            default:
            echo "no programming";
    }
    
    


?>