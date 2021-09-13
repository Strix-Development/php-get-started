<!DOCTYPE html>
<html>
<head>
    <title>goto</title>
</head>
<body>
 <?php
   echo "<h1>goto</h1>";
   $i = 0;
   while ($i <= 10) {
     echo " $i <br>";
     $i++;
     if ($i == 5) {
       goto a;
     }
    }
   a:
   echo "<p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Enim qui obcaecati voluptatum voluptate facere
   saepe incidunt earum vero eos laudantium, nisi ut laboriosam, quaerat distinctio quos, deserunt labore aspernatur
   inventore.</p>";
 ?>
</body>
</html>