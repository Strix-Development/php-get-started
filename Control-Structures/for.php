<!DOCTYPE html>
<html>
<head>
    <title>For</title>
</head>
<body>
    <?php
    echo "<h1>For</h1>";
    for ($i = 0; $i <= 10; $i++)
        echo "$i <br>";
    echo "<br>";
    for ($i = 0; $i <= 100; $i += 10) {
        echo "$i <br>";
    }
    ?>
</body>
</html>