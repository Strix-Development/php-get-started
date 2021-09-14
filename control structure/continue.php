<?php

for($a=1; $a<=10; $a++){

    if($a==7){
        continue;
    }
    echo 'The no. is '. $a .'<br>';
}

echo "<br>";

for($b=1; $b<=10; $b++){

    if($b>=6){
        continue;
    }
    echo 'The no. is '.$b. "<br>";
}

echo "<br>";


for($c=1; $c<=10; $c++){

    if($c<=5){
        continue;
    }
    echo 'The no. is '.$c.'<br>';
}

echo "<br>";



for($d=10; $d>=1; $d--){

    if($d<=6){
        continue;
    }
    echo $d .'<br>';
}

echo "<br>";

for($e=10; $e>=1; $e--){

    if($e>=7){
        continue;
    }
    echo $e.'<br>';
}

echo "<br>";















?>


