<?php
    //The switch statement is used to perform different actions based on different conditions.
    // EXAMPLES OF SWITCH STATEMENT
    $date = 20;
    switch($date)
    {
        case 40:
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
            echo "html and css programming language";
            break;      
         case 50:
             echo "python programming";
             break;
         default:
           echo "no languagre";
}
echo "<br>";





//EXAMPLE OF SWITCH STATEMENT
    $favclr = "blue";
    switch($favclr)
   {
    case "red":
        echo "my fav clr is red";
        break;
    case "blue":
        echo "my fav color is blue";
        break;
    case "green":
        echo "my fav colour is green";
        break;
    case "pink":
        echo "my clr is green";
        break;
    default:
     echo "i dont like any colour";

    }
 echo "<br>";




//EXAMPLE OF SWITCH STATEMENT
$a = 0;
    switch (true) {
    case ($a === true):
        echo '$a is true';
        break;
    case ($a === false):
        echo '$a is false';
        break;
    case ($a === 0):
        echo '$a is 0';
        break;
}
echo "<br>";





//EXAMPLE OF SWITCH STATEMENT
$age =55;
switch(true){
    case($age>=18 && $age<=25):
        echo "you are teenager";
        break;
     case($age>=30 && $age<=45):
        echo "you are adult";
        break;
     case($age>=50 && $age<=65):
        echo "you are elderly";
        break;
     default:
     echo "you are not eligible";   
}
echo "<br>";                
?>