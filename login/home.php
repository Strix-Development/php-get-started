<?php
 require_once __DIR__. "/action/header.php";
session_start();
if(isset($_SESSION['id']) && isset($_SESSION['email'])){




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
   
    <h4> Email is: <?php  echo $_SESSION['email'];   ?>  </h4>
    <h4> Password is: <?php  echo $_SESSION['password'];   ?>  </h4>
    <h4> Id is: <?php  echo $_SESSION['id'];   ?>  </h4>
</body>
</html>

<?php
}
else{
    header("location:login.php");
}
?>