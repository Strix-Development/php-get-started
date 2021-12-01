<?php
session_start();
  require_once __DIR__. "/action/header.php";
  require_once __DIR__. "./dbconnect.php";

  //$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "databs";
// create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
//if (!$conn) {
  //die("Connection failed:". mysqli_connect_error());
//}



if(isset($_POST['submit'])){
$email = $_POST['email'];
$password = $_POST['password'];
$sql =  "SELECT * FROM tbluser WHERE email = '$email' And password = '$password'";
$result=mysqli_query($conn,$sql);
//data is present in database or not

if(mysqli_num_rows($result)){
  $row = mysqli_fetch_assoc($result);
 // echo $row;
  if($row ['email'] === $email  &&  $row['password'] === $password){
    echo "log in";
    $_SESSION['id'] = $row['id'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['password'] = $row['password'];
    header("location:home.php");
    exit();
  }else{
    echo "incorrect";
  }

}
else
{
header("location:login.php");
}

//if(mysqli_num_rows($result)){
 // echo "login successfull";
//}
//else{
  //echo "incorect";
  //header("location:login.php");
//}

}
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
<div class="container">
     <form class="login-email" method="post" action="">
        <p class="login-text" style="font-size: 2rem; font-weight: 800;"> login </p>
            
        <!-- hidden field -->
        <input type="hidden" name="action" value="login">

        <div class="input-group">
        <input type="email" placeholder="email" name="email" value="email">
        </div><br>

        <div class="input-group">
        <input type="password" placeholder="password" name="password" value="password">
        </div><br> 

        <div class="input-group">
        <input type="submit" name="submit" value="submit">
        </div>
        <p class="login-register-text"> Dont have an account? <a href="./register.php"> register here</a></p>
    </form>
</div>
</body> 
</body>
</html>