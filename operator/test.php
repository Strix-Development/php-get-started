<?php
// EXAMPLE 1
if((true and true == false) or (false and false != true)  and (false or (true===true))==true) {
    echo "true";   //(!= have high precedence as cmpare to (and))
}else{
    echo "false";
}
echo "<br>";  //false


// EXAMPLE 2
if(true and true == false){
    echo "true";
}else{
    echo "false";  //output:false
}
echo "<br>";



// EXAMPLE 3
if(false and false != true){      //(!= have high precedence as cmpare to (and))         
    echo "true";
}else{
    echo "false";   //output:false
}
echo "<br>";



// EXAMPLE 4
if(false!=true){
    echo "true";
}else{
    echo "false";
}
echo "<br>";  // output:true



//EXAMLE 5
if(false and false){
    echo "true";
} else {
    echo "false";
}
echo "<br>";    //output: false



//EXAMPLE 6
if((false or (true===true))==true){
    echo "true";
}else{
    echo "false";    //output:true
}
echo "<br>";



//EXAMPLE 7
if(false or true and true){
    echo "statement is true";
}else{
    echo "statement is false";
}    // output is:- true
echo "<br>";



// EXAMPLE 8
if((1 > 3) 

and (3 > 1) or (250 >= 250) xor (1 === 1) != (1 === 2) or (1 === "1") ){
  echo "this is true";
}else{
    echo "this is false";
}
echo "<br>";  // output is false




// EXAMPLE 9
if( (2+3*4) + (3-2/1) - (8%2) * (2**2)){
    echo "true";
}else {
    echo "false";
}
echo "<br>";  //output is true



//EXAMPLE 10
if((true xor true == false) or (false or false == true)  and (false or (true===true)) !=true){
    echo "this is write";
}else{
    echo "this is wrong";  //output is this is write
}




?>