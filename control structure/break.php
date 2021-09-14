<?php


for($a=1; $a<=10; $a++){

    if($a==5){
        break;
    }
    echo 'The no. is '. $a ."<br>";
}

echo "<br>";

for($b=1; $b<=10; $b++){

    if($b>=8){
        break;
    }
    echo 'will break on '. $b ."<br>";
}

echo "<br>";

for($c=10; $c>=1; $c--){

    if($c<=6){
        break;
    }
    echo $c ."<br>";
}


echo "<br>";


for($d=10; $d>=2; $d--){

    if($d<=2){
        break;
    }
    echo 'The no. is '. $d ."<br>";
}


echo "<br>";



$e=1;

while($e<=10){

    if($e==6){
        break;
    }
    echo $e. "<br>";
    $e++;
}


echo "<br>";


for($f=1; $f<=10; $f++){

    if($f>=10){
        break;
    }
    echo 'The no. is '.$f . "<br>";
}



















?>