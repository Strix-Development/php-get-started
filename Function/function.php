<?php
function fname(){
    echo "Hello World";
}
fname();echo"<br>";
fname();echo"<br>";
fname();echo"<br>";
fname();
echo "<br>";
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
?>