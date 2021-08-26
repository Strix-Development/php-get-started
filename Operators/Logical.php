<!DOCTYPE html>
<html>
<head>
    <title>
        Operators
    </title>
</head>
<body>
    <?php
    echo "<h1>Logical Operators</h1>";
    echo "<h2>AND</h2>";
    $a=true;
    $b=true;
    var_dump ($a AND $b);
    echo "<br>";
    $a=true;
    $b=false;
    var_dump ($a && $b);
    echo "<br>";
    echo "<h2>OR</h2>";
    $a=true;
    $b=false;
    var_dump ($a or $b);
    echo "<br>";
    $a=false;
    $b=false;
    var_dump ($a OR $b);
    echo "<br>";
    $a=true;
    $b=true;
    var_dump ($a || $b);
    echo "<br>";
    echo "<h2>XOR</h2>";
    $a=true;
    $b=true;
    var_dump ($a XOR $b);
    echo "<br>";
    $a=true;
    $b=false;
    var_dump ($a XOR $b);
    echo "<br>";
    $a=false;
    $b=false;
    var_dump ($a XOR $b);
    echo "<br>";
    echo "<h2>NOT</h2>";
    $a=false;
    $b=false;
    var_dump (!$a);
    echo "<br>";
    $a=true;
    $b=false;
    var_dump (!$a);
    echo "<br>";
    $a=false;
    $b=true;
    var_dump (!$a);
    echo "<br>";
    echo "<h1>Statements</h1>";
    if ((true and true==false)or(false and false)!=true and(false or(true==true))==true){
        echo true;
    }
    else{
        echo false;
    }
    echo "<br>";
    if ((true and true==false)or(false and false!=true) and(false or(true==true))==true){
        echo true;
    }
    else{
        echo false;
    }
    ?>
</body>
</html>