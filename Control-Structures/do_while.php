<!DOCTYPE html>
<html>
<head>
    <title>Do While</title>
</head>
<body>
    <h1>Do While</h1>
    <?php
    $i=0;
    do {
        echo "$i <br>";
        $i++;
    } while ($i <= 10);
    echo "<br>";
    $i=0;
    do{
        echo "$i";
        echo "<br>";
        $i++;
    }while($i>1);
    echo "<h1>Tables</h1>";
    $i=1;
    do{
        echo " 9 * $i = ". 9 * $i ."<br>";
        $i++;
    }while($i<=10);
    echo "<br>";
    $i=1;
    do{
        echo " 10 * $i = ". 10 * $i  . "<br>";
        $i++;
    }while($i<=10);
    ?>
</body>
</html>