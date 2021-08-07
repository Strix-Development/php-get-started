<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $a = 100;
      $b = 200;
      function sum(){
          global $a,$b;
          $a=$a+$b;
      }
      sum();
      echo "$a <br>";



      //variable variable
      $name1 = "hello";
      $$name1 = "kirti";
      echo "$name1 ${$name1}";

    ?>
</body>
</html>