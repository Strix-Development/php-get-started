<?php
 /*if(condition){
     block of statement;
 }
 if(conditon:
    block of statement;
 endif;*/


 // IF CONDITION :- condition is true then execute the code or statement 
 // and also write multiple statement with in a code
$a = 10;
if($a==10){
echo "value is true";
echo "<br>";
}

//example
if (10>2);
echo "true";
echo "<br>";

 //nested if statement :- we are write if shatement within other if statement 
/* if(condition){
     statetement
     if(condition){
         statement
     }
     if(condition){
         statement
     }
 }
*/
//EXAMPLE OF NESTED IF STATEMENT
if(10>5){
    echo "this is true <br/>";
    if(102<2){
        echo"first code execute <br/>";
    }
    if(8>2){
        echo "second code is execute <br/>";
    }
}
if(8>2){
    echo "this is also true <br/>";
}
echo "<br>";


//IF ELSE CONDITION
if(10!=2){
    echo "this is true<br/>";
}
else {
    "this id false <br/>";
}
 





// elseif statement
$t = 25;
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!<br/>";
}


// if-else statement
$a = 60;
$b = 10;
if( $a>70 ) {
    echo "a is greater than 70";
}
else{
    echo "a is not greater than 70";
}



?>