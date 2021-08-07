<!DOCTYPE html>
<html>
    <head>
        <title>
            Variables
        </title>
    </head>
<body>
    <?php
     echo "<h1>Variables start</h1>";
     $x=1024;
     $y=1024;
     echo $x+$y."<br>";
     $x=1000;
     $y=1000;
     echo $z=$x+$y."<br>";
     echo $z;
     echo $z;
     echo $z;
     function test(){
         static $x=0;
         echo $x;
         $x++;
     }
     test();
     echo "<br>";
     test();
     echo "<br>";
     test();
     echo "<br>";
     test();
     echo "<br>";
     $text="small";
     echo "Road is  $text"; 
    ?>
</body>
</html>                   