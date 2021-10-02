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
      echo "<h1>Star Patterns</h1>";
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo "* &nbsp";
        $j++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=10;
    while ($j >=$i ) {
        echo "* &nbsp";
        $j--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo "* &nbsp";
        $j++;
    }
    echo"<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=9;
    while ($j >= $i) {
        echo "* &nbsp;";
        $j--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=9;
    while ($j >=$i) {
        echo " &nbsp; &nbsp; ";
        $j--;
    }
    $k=0;
    while ($k <= $i) {
        echo "* &nbsp;";
        $k++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=1;
    while ($j <= $i) {
        echo " &nbsp; &nbsp; ";
        $j++;
    }
    $k=10;
    while ($k >=$i) {
        echo "* &nbsp";
        $k--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=9;
    while ($j >=$i ) {
        echo " &nbsp; &nbsp; ";
        $j--;
    }
    $k=0;
    while ($k <= $i) {
        echo "* &nbsp;";
        $k++;
    }
    echo "<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo " &nbsp; &nbsp; ";
        $j++;
    }
    $k=9;
    while ($k >= $i) {
        echo "* &nbsp;";
        $k--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=10;
    while ($j >= $i) {
        echo "&nbsp; &nbsp;";
        $j--;
    }
    $k=0;
    while ($k <= $i) {
        echo " * ";
        $k++;
    }
    $l=1;
    while ($l <=$i) {
        echo" * ";
        $l++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo" &nbsp;&nbsp; ";
        $j++;
    }
    $k=10;
    while ($k >= $i) {
        echo " * ";
        $k--;
    }
    $l=9;
    while ($l >= $i) {
    echo " * ";
    $l--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
    $j=10;
    while ($j >= $i) {
        echo "&nbsp; &nbsp;";
        $j--;
    }
    $k=0;
    while ($k <=$i) {
        echo " * ";
        $k++;
    }
    $l=1;
    while ($l <= $i) {
        echo " * ";
        $l++;
    }
    echo "<br>";
    $i++;
}
$i=1;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo "&nbsp; &nbsp;";
        $j++;
    }
    $k=9;
    while ($k >= $i) {
        echo " * ";
        $k--;
    }
    $l=10;
    while ($l >= $i) {
        echo " * ";
        $l--;
    }
    echo "<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo "* &nbsp";
        $j++;
    }
    echo "<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo " &nbsp; &nbsp; ";
        $j++;
    }
    $l=9;
    while ($l <= 10) {
        echo " &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; ";
        $l++;
    }
    $k=10;
    while ($k >= $i) {
        echo "* &nbsp;";
        $k--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 10) {
   $j=0;
   while ($j <=$i) {
      echo " * ";
      $j++;
   }
   $k=9;
   while ($k >= $i) {
      echo " &nbsp; &nbsp; &nbsp ";
      $k--;
   }
$j=0;
while ($j <=$i) {
   echo " * ";
   $j++;
}
echo "<br>";
$i++;
}
echo"<br>";
$i=0;
while ($i <= 10) {
    $j=0;
    $k=0;
    while ($k <= 10) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        $k++;
    }
    while ($j <= $i) {
        echo "* &nbsp";
        $j++;
    }
    echo "<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=0;
    while ($j <= $i) {
        echo " &nbsp; &nbsp; ";
        $j++;
    }
    $k=10;
    while ($k >= $i) {
        echo "* &nbsp;";
        $k--;
    }
    echo "<br>";
    $i++;
}
$i=0;
while ($i <= 10) {
    $j=10;
    while ($j >= $i) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        $j--; 
    }
    $k=0;
    while ($k <= $i) {
     echo " &nbsp; * ";
     $k++;
    }
    echo "<br>";
    $i++;
   }
   $i=0;
   while ($i <= 10) {
      $j=0;
      while ($j <=10) {
         echo "&nbsp; &nbsp; &nbsp;";
         $j++;
      }
      $k=10;
      while ($k >= $i) {
         echo " &nbsp; * ";
         $k--;
      }
      echo "<br>";
      $i++;
   }
   echo "<br>";
   echo "<h1>Number Patterns</h1>";
$i=1;
while ($i <= 5) {
    $j=1;
    while ($j <= $i) {
        echo "$j &nbsp;";
        $j++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=1;
while ($i <= 5) {
    $j=$i;
    $k=4;
    while ($k >= $i) {
       echo " &nbsp; &nbsp; ";
       $k--;
    }
    while ($j >= 1) {
        echo "$j &nbsp;";
        $j--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=0;
while ($i <= 5) {
    $j=1;
    while ($j <= $i) {
        echo " &nbsp; &nbsp; ";
        $j++;
    }
    $k=5-$i;
    while ($k >= 1) {
        echo"$k &nbsp;";
        $k--;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=1;
while ($i <= 5) {
    $j=1;
    while ($j <= $i) {
        echo "$i &nbsp;";
        $j++;
    }
    echo "<br>";
    $i++;
}
echo "<br>";
$i=5;
while ($i>=0 ) {
    $j=1;
    while ($j <=$i) {
        echo"$j &nbsp;";
        $j++;
    }
    echo "<br>";
    $i--;
}
echo "<br>";
$i=5;
while ($i >= 1) {
    $k=5-$i;
    while ($k >= 1) {
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
        $k--;
    }
    $j=1;
    while ($j <= $i) {
        echo "$i &nbsp;";
        $j++;
    }
    echo "<br>";
    $i--;
}
echo "<br>";
$i=1;
while ($i <= 5) {
    $j=1;
    $k=5;
    while ($k >= $i) {
       echo " &nbsp; &nbsp; ";
       $k--;
    }
    while ($j <= $i) {
        echo "$j &nbsp;";
        $j++;
    }
    $j=$i-1;
    while ($j >= 1) {
       echo "$j &nbsp;";
       $j--;
    }
    echo "<br>";
    $i++;
}
$i=4;
while ($i >= 1) {
    $j=1;
    $k=5;
    while ($k >= $i) {
       echo " &nbsp; &nbsp; ";
       $k--;
    }
    while ($j <= $i) {
        echo "$j &nbsp;";
        $j++;
    }
    $j=$i-1;
    while ($j >= 1) {
       echo "$j &nbsp;";
       $j--;
    }
    echo "<br>";
    $i--;
}
echo "<br>";
$i=1;
while ($i <= 5) {
    $j=1;
    $k=5;
    while ($k >= $i) {
       echo " &nbsp; &nbsp; ";
       $k--;
    }
    while ($j <= $i) {
        echo "$j &nbsp;";
        $j++;
    }
    $j=$i-1;
    while ($j >= 1) {
       echo "$j &nbsp;";
       $j--;
    }
    echo "<br>";
    $i++;
}
?>
</body>
</html>