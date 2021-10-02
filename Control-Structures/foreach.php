<!DOCTYPE html>
<html>
<head>
    <title>Foreach</title>
</head>
<body>
   <?php
   echo "<h1>Foreach</h1>";
   $var=array(1,2,3,4,5,6,7,8,9,10);
   foreach($var as $val){
   echo "$val <br>";
   }
   echo "<br>";
   $var=["apple","ball","cat","dog","elephant","fish","grapes","hen"];
   foreach($var as $val){
       echo "$val <br>";
   }
   echo "<br>";
   $var=array("abc"=>"10","xyz"=>"10","cba"=>"20","zyx"=>"20");
   foreach($var as $name=>$age)
   echo "$name=$age <br>";
   echo "<br>";
   $var=[" abc "=>" 10 "," xyz "=>" 10 ",];
   foreach($var as $name=>$age){
       echo "$name=$age <br>";
   }
   echo "<br>";
   $var=array("abc","xyz");
   foreach ($var as $val) {
       echo "$val <br>";
   }
   ?>
</body>
</html>