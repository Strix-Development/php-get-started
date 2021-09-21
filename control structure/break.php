<?php
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

?>