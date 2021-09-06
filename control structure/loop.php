<?php
//   WHILE LOOP\:- WHILE LOOP REPEATS AN ACTION UNTIL AN ASSOCIATIVE CONDITION RETURNS FALSE
// SYNTAX FOR WHILE LOOP
/*initialzation;
while(condition){
    block of statement ;
    imcremrnt or drcrement;
}*/
// ALTERNATIVE SYNTAX OF WHILE LOOP
/* initialization;
while(condition):
    block of statement;
    increment and decrement;
endwhile; */

$num = 1;  // initialization work only one time
while($num<=5){
    echo "number is $num <br/>";
    $num++;
}
echo "<br>";




//DO WHILE LOOP:- IT IS SIMILAR TO THE WHILE LOOP. BUT THE CONDITION IS CHECKED AFTER THE 
//LOOP BODY IS EXECUTE.THIS ENSURE THAT THE LOOP BODY IS RUN ATLEAST ONCE.
//SYNTAX OF DO WHILE LOOP:- its have only this syntax and no other syntax for do while loop
//in do while statement is rum  one time and the check condition and then execute statement again
/* initialization:
do{
    block of code;
    increment and decrement;
} while(condition); */

$num = 1;  // initialization work only one time
do{
    echo "number is $num <br/>";
    $num++;
}while($num<=3);
echo "<br>";




//FOR LOOP:-FOR LOOP IS FREQUENTLY USED UASUALLY WHRE THE LOOP WILL BE TRAVERSED A FIXED NUMBER OF TIME
//SYNTAX OF FOR LOOP
/*for(initialization; test condition; increment and decrement){
    block of code;
}*/

for($num = 1 ; $num <= 3; $num++){  //initializarion work only one time
    echo "number is $num<br/>";
}




// PRACTICE ON PATTERN:- MAKING PATTERN FIRST OF ALL CHECK PATTERN HOW MANY ROWS AND COLUMN IN THE PATTERN
//PRINT  LEFT  SIDED TRIANGLE
$row = 0;
while($row <= 5){
    $column = 0;
    while($column <= $row){
        echo "  &nbsp&nbsp*&nbsp&nbsp  ";
        $column++;
    }
    echo "<br>";   // for next line

    $row++;
}
echo "<br>";









//PRINT OPPOSITE LEFT SIDED TRIANGLE
$row = 1;
while($row <= 6){
    $column = $row;
    while($column <= 6){
        echo " &nbsp&nbsp*&nbsp&nbsp ";     //print * and also space
        $column++;
    }
    echo "<br>";

    $row++;
}
echo "<br>";
 





// PRINT RIGHT SIDED TRIANGLE
$i = 1;
while($i <= 6){
    $j = 5;
    while($j >= $i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br>";

    $i++;
}
echo "<br>";

  





//PRINT OPPOSITE RIGHT SIDED TRIANGLE
$i = 0; 
while($i <= 5){
    $j = 0;
    while($j <= $i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j++;
    }
    $k=5;
    while($k>=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k--;
    }
    echo "<br>";

    $i++;
}
echo "<br>";






//PRINT   PARAMID
$i = 1;
while($i <= 6){  
    $j = 6;
    while($j > $i){
        echo "&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br/>";

    $i++;
}
echo "<br>";





//PRINT  OPPOSTE  PARAMID
$i = 6;
while($i >= 1){
    $j = 6;
    while($j >= $i){
        echo "&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br/>";

    $i--;
}
echo "<br>";






//PRINT DIAMOND 
$i = 0;                          
while($i <= 6){
    $j = 6;
    while($j >= $i){
        echo "&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br/>";

    $i++;
}
$i = 5;
while($i >= 1){
    $j = 6;
    while($j >= $i){
        echo "&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=1;
    while($k<=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br>";
     $i--;
}
echo "<br>";






// PRINT NEXT PATTERN
$r= 1;
while($r <= 5){
    $c = 1;
    while($c <= $r){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $c++;
    }
    $sp=4;
    while($sp>=$r){
        echo "&nbsp&nbsp&nbsp&nbsp";
        $sp--;
    }
    $sp=4;
    while($sp>=$r){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $sp--;
    }
    $c = 1;
    while($c <= $r){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $c++;
    }
    echo "<br>";
    $r++;
}
echo "<br>";






//PRINT NEXT PATTERN
$r= 1;
while($r <= 5){
    $c = 1;
    while($c <= $r){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $c++;
    }
   echo "<br>";
    $r++;
} 
$i = 6;
while($i <= 10){
    $j = 2;
    while($j <= $i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        
        $j++;
    }
 $k=10;
    while($k>=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k--;
    }
    echo "<br>";

    $i++;
}
echo "<br>";








//PRINT NEXT PATTERN
$i=0;
while($i<=4){
    $j=4;
    while($j>=$i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j--;
    }
    $k=0;
    while($k<=$i){
        echo " &nbsp&nbsp*&nbsp&nbsp";
        $k++;
    }
    echo "<br>";
    $i++;
}
$i = 6;
while($i <= 10){
    $j = 6;
    while($j <=10){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j++;
    }
    $k=10;
    while($k>=$i){
        echo "&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp";
        $k--;
    }
    echo "<br>";

    $i++;
}
echo "<br>";







//PRINT NEXT PATTERN
$i = 6;
while($i <= 10){
    $j = 6;
    while($j <=10){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j++;
    }
    $k=6;
    while($k<=$i){
        echo "&nbsp&nbsp&nbsp*&nbsp&nbsp&nbsp";
        $k++;
    }
    echo "<br>";

    $i++;
}
$i = 1; 
while($i <= 5){
    $j = 1;
    while($j <= $i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
        $j++;
    }
    $k=5;
    while($k>=$i){
        echo "&nbsp&nbsp*&nbsp&nbsp";
        $k--;
    }
    echo "<br>";

    $i++;
}
echo "<br>";






// PRINT COLUMN(1,2,3,4,5) LEFT SIDE TRIANGLE SHAPE
$row = 1;
while($row <= 5){
    $column = 1;
    while($column <= $row){
        echo " $row &nbsp ";
        $column++;
    }
    echo "<br>";

    $row++;
}
echo "<br>";





//PRINT COLUMN(1,1,1,1,1) LEFT SIDE TRIANGLE SHAPE
  $row = 1;
while($row <= 5){
    $column = 1;
    while($column <= $row){
        echo " $column &nbsp";
        $column++;
    }
    echo "<br>";

    $row++;
}
echo "<br>";






//PRINT OPPOSITE LEFT SIDE TRIANGLE COLUMN(1,1,1,1,1)
$i = 5;
while($i >= 1){
    $j = 1;
    while($j <= 5){

        if($j>$i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";   
    }else{
        echo "&nbsp&nbsp$j&nbsp&nbsp" ;
    }
    $j++;
    }
echo "<br>";
      $i--;
}
echo "<br>";





//PRINT RIGHT SIDE TRIANGLE COLUMN(1,1,1,1,1)
$i = 1;
while($i <= 5){
    $j = 5;
    while($j >= 1){

        if($j>$i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";   
    }else{
        echo "&nbsp&nbsp$j&nbsp&nbsp" ;
    }
    $j--;
    }
echo "<br>";
      $i++;
}
echo "<br>";







//PRINT OPPOSITE RIGHT SIDED TRIANGLE COLUMN(1,1,1,1,1)
$i = 5;
while($i >= 1){
    $j = 5;
    while($j >= 1){

        if($j>$i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";   
    }else{
        echo "&nbsp&nbsp$j&nbsp&nbsp" ;
    }
    $j--;
    }
echo "<br>";
      $i--;
}
echo "<br>";







//PRINT OPPOSITE RIGHT SIDED TRIANGLE (ROW=5,5,5,5,5)
$i = 5;
while($i >= 1){
    $j = 5;
    while($j >= 1){

        if($j>$i){
        echo "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";   
    }else{
        echo "&nbsp&nbsp$i&nbsp&nbsp" ;
    }
    $j--;
    }
echo "<br>";
      $i--;
}
echo "<br>";







// PRINT NUMBER PARAMID PATTERN
$m=1;
$n=6;
$z=6;

$i = 1;
while($i <= 6){  
    $j = $i;
    while($j <= 6){
        echo "&nbsp&nbsp&nbsp";   //space
        $j++;
    }
   $k=1;
    while($k<=$m){                //left side pyramid
        echo  $k . "&nbsp";
        $k++;
    }
    $c=$m;
    while($c>1){
        echo  $c-1 ."&nbsp";
        $c--;
    }
    $m++;
    echo "<br/>";

    $i++;
}
echo "<br>";





//PRINT NUMBER DIAMOND PATTERN
$m=1;
$n=6;
$z=6;

$i = 1;
while($i <= $n){  
    $j = $i;
    while($j <= $n-1){
        echo "&nbsp&nbsp&nbsp";   //space
        $j++;
    }
   $k=1;
    while($k<=$m){                //left side pyramid
        echo  $k . "&nbsp";
        $k++;
    }
    $c=$m;
    while($c>1){
        echo  $c-1 ."&nbsp";
        $c--;
    }
    $m++;
    echo "<br/>";
    $i++;
}
$i=1;
while($i <= $n){  
    $j = 1;
    while($j <= $i){
        echo "&nbsp&nbsp&nbsp";   //space
        $j++;
    }
   $k=1;
    while($k<$z){                //left side pyramid
        echo  $k . "&nbsp";
        $k++;
    }
    $c=$z-2;
    while($c>=1){
        echo  $c ."&nbsp";
        $c--;
    }
    $z--;
    echo "<br/>";

    $i++;
}


// BREAK STATEMENT EXAMPLE
for($i=0; $i<=5; $i++){
echo "$i";
echo "<br>";
if($i == 3){  // $i value is 3 then (3==3) and then stop ho jayega code
    break;
}
}
echo "<br>";



//EXAMPLE OF BREAK STATEMENT
$arr = array('ram','shyam','reeta','sumit');
foreach($arr as $value){
    if($value == 'reeta'){
        break;       // because of break array stoping for reeta and print only ram,shyam.
    }
    echo "$value" ;
    echo "<br>";
}
echo "<br>";



// EXAMPLE OF CONTINUE STATEMENT
for($i=1; $i<=5; $i++){
    if($i == 2){   // 2 skip because of continue statement
        continue;
    }
    echo "$i";
    echo "<br>";
}
echo "<br>";


// EXAMPLE OF CONTINUE STATEMENT
$arr = array('banana','apple','orange','grapes');
foreach($arr as $val){
    if($val == 'orange'){
        continue;
    }
    echo "$val";
    echo "<br>";
}

?> 
