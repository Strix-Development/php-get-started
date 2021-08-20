<!DOCTYPE html>
<html>
<head>
    <title>Operators</title>
</head>
<body>
    <h1>Comparison Operators</h1>
    <?php
     $a=10;
     $b=10;
     var_dump ($a==$b);
     echo "<br>";
     $a=10;
     $b="10";
     var_dump ($a==$b);
     echo "<br>";
     $a=10;
     $b="11";
     var_dump ($a==$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a==$b);
     echo "<br>";
     $a=10;
     $b=10;
     var_dump ($a!=$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a!=$b);
     echo "<br>";
     $a=10;
     $b="11";
     var_dump ($a!=$b);
     echo "<br>";
     $a=10;
     $b=10;
     var_dump ($a===$b);
     echo "<br>";
     $a=10;
     $b="10";
     var_dump ($a===$b);
     echo "<br>";
     $a='10';
     $b="10";
     var_dump ($a===$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a===$b);
     echo "<br>";
     $a=10;
     $b=10;
     var_dump ($a<>$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a<>$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a!==$b);
     echo "<br>";
     $a="10";
     $b=10;
     var_dump ($a!==$b);
     echo "<br>";
     $a=10;
     $b=10;
     var_dump ($a!==$b);
     echo "<br>";
     $a=11;
     $b=10;
     var_dump ($a>$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a>$b);
     echo "<br>";
     $a=11;
     $b=10;
     var_dump ($a<$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a<$b);
     echo "<br>";
     $a=11;
     $b=10;
     var_dump ($a>=$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a>=$b);
     echo "<br>";
     $a=10;
     $b=10;
     var_dump ($a>=$b);
     echo "<br>";
     $a=11;
     $b=10;
     var_dump ($a<=$b);
     echo "<br>";
     $a=10;
     $b=11;
     var_dump ($a<=$b);
     echo "<br>";
     $a=20;
     $b=10;
     var_dump ($a <= $b);
     echo "<br>";
     $a=5;
     $b=10;
     echo ($a <=> $b) ."<br>";
     $a=10;
     $b=10;
     echo ($a <=> $b) ."<br>";
     $a=15;
     $b=10;
     echo ($a <=> $b) ."<br>";
    ?>
    <h1>Error Control</h1>
    <?php
     $a=15;
     $b=10;
    echo @($x <=> $y) ."<br>";
    ?>
    
</body>
</html>