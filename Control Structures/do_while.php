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
    ?>
</body>
</html>