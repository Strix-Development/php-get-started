<?php


$a=1;

while($a<=5){

$b=1;

while($b<=$a){
    echo $b ."&nbsp";
    $b++;
}



    echo '<br>';
    $a++;
}


echo '<br>';


$c=1;

while($c<=5){

$d=1;

while($d<=$c){

    echo $c .'&nbsp';
    $d++;
}


    echo '<br>';
    $c++;
}


echo '<br>';

$e=1;

while($e<=5){

$f=1;

while($f<=$e){

  echo "&nbsp &nbsp";
  $f++;

}

$g=5;

while($g>=$e){

    echo $g-$e+1 . '&nbsp';
    $g--;
}

    echo '<br>';
    $e++;
}


echo '<br>';



$h=1;

while($h<=5){

$i=1;

while($i<=$h){
    echo '&nbsp &nbsp';
    $i++;
}


$j=5;

while($j>=$h){
    echo $h . '&nbsp';
    $j--;
}

    echo '<br>';
    $h++;
}





$ho=1;

while($ho<=5){

$po=1;

while($po<=$ho){
    echo '&nbsp ';
    $po++;
}


$jo=5;

while($jo>=$ho){
    echo '&nbsp &nbsp &nbsp ';
    $jo--;
}


$wo=1;

while($wo<=$ho){
echo  $wo . ' &nbsp';
$wo++;
}

$vo=1;

 while($vo<=$jo){
        echo $ho-$vo .'&nbsp';
        $vo++;
    }

    echo '<br>';
    $ho++;
      
}






$ro=1;

while($ro<=4){

    
    $fo=1;
    
    while($fo<=$ro){
        
        echo '&nbsp &nbsp &nbsp &nbsp';
        $fo++;
    }
    
    
    $do=4;
    
    while($do>=$ro){
        echo '&nbsp &nbsp';
        $do--;
    }
    
    
    $to=4;
    
    while($to>=$ro){
        echo $to .'&nbsp ';
        $to--;
    }
    
    
    
    $co=3;
    
    while($co>=$ro){
        echo $co-$ro+1 .'&nbsp ';
        $co--;
    }
    
    
    echo '<br>';
    $ro++;
}

echo '<br>';



$eo=1;

while($eo<=5){

$yo=1;

while($yo<=$eo){
    echo '&nbsp ';
    $yo++;
}


$zo=5;

while($zo>=$eo){
    echo '&nbsp &nbsp &nbsp ';
    $zo--;
}


$so=1;

while($so<=$eo){
echo  $so . ' &nbsp';
$so++;
}

$lo=1;

 while($lo<=$zo){
        echo $yo-$lo-1 .'&nbsp';
        $lo++;
    }

    echo '<br>';
    $eo++;
      
}


?>