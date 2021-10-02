<!DOCTYPE html>
<html>
<head>
    <title>Switch</title>
</head>
<body>
    <?php
     echo "<h1>Switch</h1>";
     $favcolor = "black";
     switch ($favcolor) {
         case "red":
            echo "Your favourite color is red";
            break;
         case "black":
            echo "Your favourite color is black";
            break;
         case "green":
            echo "Your favourite color is green";
            break;
         case "blue":
          echo "Your favourite color is blue";
          break;
         default:
           echo "Your favourite color is neither red,black,green nor blue";
     }
     echo "<br>";
     $i = 0;
     switch ($i) {
       case 0:
        echo "Selected value is 0";
        break;
       case 1:
        echo "Selected value is 1";
        break;
       case 2:
       echo "Selected value is 2";
       break;
       case 3:
         echo "Selected value is 3";
         break;
       case 4:
        echo "Selected value is 4";
        break;
       case 5:
        echo "Selected value is 5";
        break;
        default:
        echo "Selected value is neither 0,1,2,3,4 nor 5";
     }
    ?>
</body>
</html>