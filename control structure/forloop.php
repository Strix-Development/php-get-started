<?php



for($a=1; $a<=10; $a++){
    echo 'this is the example of for loop '. $a .'<br>';
}

echo '<br>';

for($b=0; $b<=5; $b++){

for($c=0; $c<=$b; $c++){

    echo '* &nbsp';
}

    echo '<br>';
}


echo '<br>';


for($d=5; $d>=0; $d--){

    for($e=0; $e<=$d; $e++){
        echo '* &nbsp';
    }


    echo '<br>';
}

echo '<br>';



for($f=0; $f<=5; $f++){

    for($g=0; $g<=$f; $g++){

        echo '* &nbsp';
    }


    echo '<br>';
}


for($h=0; $h<=5; $h++){

    for($i=0; $i<=$h; $i++){

        echo '&nbsp &nbsp &nbsp &nbsp';
    }

    for($j=5; $j>=$h; $j--){

        echo '&nbsp &nbsp';
    }


    for($k=5; $k>=$h; $k--){

        echo '* &nbsp';
    }



    echo '<br>';
}

echo '<br>';



for($l=0; $l<=6; $l++){

    for($m=0; $m<=$l; $m++){
        
        echo '* &nbsp';
    }


    for($n=5; $n>=$l; $n--){

        echo '&nbsp &nbsp &nbsp &nbsp ';
    }


    for($o=0; $o<=$l; $o++){

        echo "* &nbsp";
    }


    echo '<br>';
}


echo '<br>';










?>