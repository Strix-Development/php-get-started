<!DOCTYPE html>
<html>
<head>
    <title>if statements</title>
</head>
<body>
    <h1>if else statements</h1>
    <?php
      echo "<h2>if</h2>";
      $a=10;
      $b=10;
      if($a==$b){
         echo "$a is equal to $b";
      }
      echo "<br>";
      $a=5;
      $b=10;
      if($a!=$b){
          echo "$a is not equal to $b";
      }
      echo "<h2>if else</h2>";
      $a=10;
      $b=15;
      if($a>$b){
          echo "$a is greater than $b";
      }else{
          echo "$a is not greater than $b";
      }
      echo "<br>";
      $a=15;
      $b=10;
      if($a>$b){
          echo "$a is greater than $b";
      }else{
          echo "$a is not greater than $b";
      }
      echo "<h2>else if</h2>";
      $a=10;
      $b=10;
      if ($a==$b){
          echo "$a is equal to $b";
      }else if ($a>$b){
          echo "$a is greater than $b";
      }else{
          echo "$a is less than $b";
      }
      echo "<br>";
      $a=100;
      $b=200;
      if($a==$b){
          echo "$a is equal to $b";
      }elseif($a!=$b){
          echo "$a is not equal to $b";
      }else{
          echo "$a is less than $b";
      }
      echo "<h2>Alternative syntax for control structures</h2>";
      $a=100;
      $b=500;
      if($a>$b):
        echo "$a is greater than $b";
        elseif($a==$b):
            echo "$a is equal to $b";
            else:
                echo "$a is neither greater than or equal to $b";
        endif;
    ?>
</body>
</html>