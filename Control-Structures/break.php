<!DOCTYPE html>
<html>
<head>
    <title>Break</title>
</head>
<body>
    <?php
    echo "<h1>Break</h1>";
    $var=array("one","two","three","four","five","six","seven","eight","nine","ten");
    foreach($var as $val){
        if($val=="five"){
            break;
        }
        echo "$val <br>";
    }
    echo "<br>";
    $var=["1","2","3","4","5","6","7","8","9","10"];
    foreach ($var as $val) {
        if($val == 7){
            break;
        }
        echo "$val <br>";
    }
    echo "<br>";
    $var=array('one','two','three','four','five');
    $vr=array('six','seven','eight','nine','ten');
    foreach($var as $val){
        foreach($vr as $vl){
            if($vl == 'eight'){
                break 2;
            }
            echo "$vl<br>";
        }
        echo "$val <br>";
    }
    ?>
</body>
</html>