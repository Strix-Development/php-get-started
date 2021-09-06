<!DOCTYPE html>
<htm>
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
    echo "<h1>For</h1>";
    for($i=0;$i<=10;$i++)
    echo "$i <br>";
    echo "<br>";
    for ($i=0; $i<=100 ; $i+=10) { 
    echo "$i <br>";
    }
    ?>
</body>
</html>