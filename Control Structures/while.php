<!DOCTYPE html>
<html>
<head>
    <title>While</title>
</head>
<body>
    <h1>While loop</h1>
    <?php
    $a=0;
      while ($a <= 10) {
          echo $a ."<br>";
          $a++;
      }
      echo "<h1>Patterns</h1>";
      $row=0;
      while($row<=10){
          $column=0;
          while($column<=$row){
              echo "* &nbsp";
              $column++;
          }
          echo "<br>";
          $row++;
      }
      echo "<br>";
     $row=0;
     while($row<=10){
        $column=0;
        $k=10;
        while($column<=$row){
           echo " &nbsp; &nbsp;";
           $column++;
        }
        while ($k>=$row) {
           echo"* &nbsp";
           $k--;
        }
        echo "<br>";
        $row++;
     }
     echo "<br>";
     $i=0;
     while ($i<=10) {
        $j=0;
        $k=0;
        while ($j<=10-$i) {
         echo "&nbsp;&nbsp;";
         $j++;
        }
        while ($k<=$i) {
           echo "*&nbsp;&nbsp;";
           $k++;
        }
        echo "<br>";
        $i++;
     }
    echo "<br>";
     $i=0;
     while ($i<=10) {
        $j=0;
        $k=10;
        while ($j<=$i) {
         echo "&nbsp;&nbsp;";
         $j++;
        }
        while ($k>=$i) {
           echo "* &nbsp;";
           $k--;
        }
        echo "<br>";
        $i++;
     }
     echo "<br>";
     $i=0;
     while ($i<=10) {
        $j=0;
        $k=0;
        while ($j<=10-$i) {
         echo "&nbsp;&nbsp;";
         $j++;
        }
        while ($k<=$i) {
           echo "*&nbsp;&nbsp;";
           $k++;
        }
        echo "<br>";
        $i++;
     }
     $i=1;
     while ($i<=10) {
        $j=0;
        $k=10;
        while ($j<=$i) {
         echo "&nbsp;&nbsp;";
         $j++;
        }
        while ($k>=$i) {
           echo "* &nbsp;";
           $k--;
        }
        echo "<br>";
        $i++;
     }

?>
</body>
</html>