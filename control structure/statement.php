<?php
/*FIRST WAY TO WRITE SYNTAX OF IF STATEMENT
 if(condition){
     block of statement;
 }
 SECOND WAY TO WRITE SYNTAX OF IF STATEMENT
 if(conditon:
    block of statement;
 endif;*/


 // IF CONDITION :- condition is true then execute the code or statement 
 // and also write multiple statement with in a code

 //EXAMPLE OF IF STATEMENT
 $a = 10;
 if($a==10){
 echo "value is true";
 echo "<br>";
 }

 //EXAMPLE OF IF STATEMENT
 $day = "sunday";
 if($day == "sunday"){
     echo " toady is sunady";
 }
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
 //FIRST EXAMPLE OF NESTED IF STATEMENT
if(10>5){
    echo "this is true <br/>";
    if(102<2){
        echo"first code execute<br/> ";
    }
    if(8>2){
        echo "second code is execute<br/> ";
    }
}
if(8>2){
    echo "this is also true ";
}
echo "<br>";

// SECOND EXAMPLE OF NESTED IF STATEMENT
$x = 25;
if($x <= 30){
    echo "this is chai <br/>";
    if($x < 30){
        echo "this is tea <br/>"; 
    }
    if($x>30){
        echo "this is coffee <br/>";
    }
}

if($x==30){
    echo "this is nothing <br/>";
}







//IF ELSE CONDITION
/*if ($a > $b) {
    echo "a is greater than b";
  } else {
    echo "a is NOT greater than b";
  }*/

// FIRST EXAMPLE OF IF ELSE CONDITION
if(10!=2){
    echo "this is true";
}
else {
    "this is false ";
}
echo "<br>";


// SECOND EXAMPLE OF IF ELSE STATEMENT
 if ((true and true == false) and (false and true != true) or (false and false === true) xor (true xor true )){
     echo " this statement is true";
 }else{
     echo "this statement is false";
}
echo "<br>";

// THIRD  EXAMPLE OF IF ELSE STATEMENT
$a = 60;
$b = 10;
if( $a>70 ) {
    echo "a is greater than 70";
}
else{
    echo "a is not greater than 70";

}
echo "<br>";




// EXAMPLE OF  ELSEIF STATEMENT
$age = 10;
if($age > 18){
    echo "you can drink water";
}
elseif ($age >13){
    echo "you can drink chai";
}else{
    echo "you can drink water and chai";
}
echo "<br>";

// EXAMPLE OF ELSEIF STATEMENT
$t = 25;
if ($t < "10") {
  echo "Have a good morning!";
} elseif ($t < "20") {
  echo "Have a good day!";
} else {
  echo "Have a good night!";
}
echo "<br>";

//EXAMPLE OF ELSEIF STATEMENT
$k = 10;
$v = 20;
if ($k > $v) {
    echo "a is bigger than b";
} elseif ($k == $v) {
    echo "a is equal to b";
} else {
    echo "a is smaller than b";
}







?>