<!DOCTYPE html>
<html>
<head> 
    <title>Operators</title>
</head>
<body>
    <h1>Assignment Operators</h1>
    <?php
    $a =($b=10)+5;
    echo $a ."<br>";
    $a=($b=10+$b=10)-5;
    echo $a ."<br>";
    $a=5;
    $a+=10;
    $a+=10;
    $a-=5;
    echo $a ."<br>";
    $a=5;
    $a+=10;
    $a+=10;
    $a-=5;
    $b=10;
    echo $a*$b."<br>";
    $a=5;
    $a+=10;
    $a+=10;
    $a-=5;
    $b=10;
    $c=10;
    echo $a*$b/$c."<br>";
    $a=15;
    $a%=10;
    echo $a;
    ?>
</body>
</html>