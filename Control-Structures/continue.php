<!DOCTYPE html>
<html>
<head>
    <title>Continue</title>
</head>
<body>
    <?php
    echo "<h1>Continue</h1>";
    $var=array("one","two","three","four","five","six","seven","eight","nine","ten");
    foreach($var as $val){
        if($val=="five"){
            continue;
        }
        echo "$val <br>";
    }
    echo "<br>";
    $var=["1","2","3","4","5","6","7","8","9","10"];
    foreach($var as $val){
        if($val==7){
            continue;
        }
        echo " $val <br>";
    }
    echo "<h1>Break and Continue</h1>";
    $var=["1","2","3","4","5","6","7","8","9","10"];
    foreach($var as $val){
        if($val==4){
            continue;
        }
        if ($val==8){
            break;
        }
        echo "$val <br>";
    }
    ?>
</body>
</html>