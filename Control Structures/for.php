<!DOCTYPE html>
<html>
<head>
    <title>For</title>
</head>
<body>
    <?php
       echo "<h1>For</h1>";
       for($i=0;$i<=10;$i++)
       echo "$i <br>";
       echo "<br>";
       for ($i=0; $i<=100 ; $i+=10) { 
       echo "$i <br>";
       }
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