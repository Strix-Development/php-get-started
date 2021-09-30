<?php
echo "<h1>Functions</h1>";
function fname(){
    echo "Hello World";
}
fname();echo"<br>";
fname();echo"<br>";
fname();echo"<br>";
fname();echo "<br>";
function sub($english,$chemistry,$physics){
    $sum=$english+$chemistry+$physics;
    return $sum;
}
$marks=sub(45,40,40);
echo "Total marks:".$marks."/150";
echo "<br>";
function percentage($marks){
$perc=($marks/150*100);
echo "Percentage:".$perc."%";
}
percentage($marks);
echo "<br>";
function fname1($x){
    return $x*5;
}
echo fname1(5);
echo "<br>";
function fname2($x,$y){
    return $x-$y;
}
echo fname2(1,5);
echo "<br>";
function fname3($x){
   return $x*8;
}
echo fname3(8);
echo "<br>";
function fname4(){
    echo "HELLO WORLD";
}
fname4();
echo "<br>";
fname4();
echo "<br>";
echo fname3(2)."<br>";
echo fname1(10)."<br>";
echo fname2(20,10)."<br>";
echo "<h1>Variable Functions</h1>";
function variable(){
    echo "This is variable function";
}
$var="variable";
$var();
echo "<br>";
$var();
echo "<br>";
function variable1($x){
    return $x;
}
$var='variable1';
echo $var(5)."<br>";
echo $var(5)."<br>";
function variable2($x,$y){
    return $x*$y;
}
$var= 'variable2';
echo $var(2,2)."<br>";
echo $var(2,2)."<br>";
$var=function($fname){
    return $fname*2;
};
echo $var(4)."<br>";
echo $var(5);
echo "<h1>Recursive</h1>";
function fname5($x){
 if($x==0){
     return $x;
 }else{
   echo "$x*0=";  return $x*0;
 }
 }
 echo fname5(0);
echo "<br>";
function factorial($x){
    if($x==0){
        return 1;
    }else{
       return $x*factorial($x-1);
    }
}
echo "Factorial:".factorial(10)."<br>";
function fname6($marks){
    if($marks<=30){
        return "Marks:".$marks."<br>"."Status:Fail";
    }elseif($marks>50){
        return "Error:Enter valid marks";
    }else{
        return "Marks:".$marks."<br>"."Status:Pass";
    }
}
echo fname6(31);
echo "<br>";
function fname7($num){
    if($num<="9"){
        return "$num is single digit number";
    }elseif($num>=100){
        return "Error: Please enter value below 100";
    }else{
        return "$num is double digit number";
    }
}
echo fname7("1");
?>