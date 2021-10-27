<?php
  //session_start();
    require_once __DIR__. "/bootstrap/app.php";
  //header function call
    include file_header();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h4> welcome: <?php  echo $_SESSION['fname'];   ?> </h4>
    <h4> Email is: <?php  echo $_SESSION['email'];   ?>  </h4>
    <h4> Role is: <?php   echo $_SESSION['selectRole'];   ?>  </h4>
    <h4> Password is: <?php  echo $_SESSION['password'];   ?>  </h4>
</body>
</html>
<?php  
    include file_footer();
?>