<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- LOCAL SCOPE OF VARIABLE-->
  <?php
function my() {
    $x =25; 
 echo " value of x is $x";           
} 
my();
echo " value of x is $x";   // outside function it will generate error  
?>
</body>
</html>