<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
</style>
</head>
<body>
<?php
require_once __DIR__."../../../../Bootstrap/app.php";
require_once file_header();
if($_POST['password']!=$_POST['confirmpassword']){
  echo "Password doesn't match<br>";
}
if(empty($_POST['fname'])){
  echo "First name is required<br>";
}
if(empty($_POST['lname'])){
  echo "Last name is required<br>";
}
if(empty($_POST['tel'])){
  echo "Phone number is required<br>";
}
if(empty($_POST['email'])){
  echo "E-mail is required<br>";
}
if(empty($_POST['password'])){
  echo "Password is required<br>";
}
if(empty($_POST['confirmpassword'])){
  echo "Confirm password is required<br>";
}
elseif($_POST["password"]==$_POST["confirmpassword"]) {
  $action = array(
    "fname"=> $_POST["fname"],
    "lname"=> $_POST["lname"],
    "email"=> $_POST["email"],
    "phone number"=> $_POST["tel"],
    "password"=> $_POST['password'],
    "confirmpassword"=> $_POST['confirmpassword']
  );
  $actions = json_encode($action,JSON_PRETTY_PRINT);
  file_put_contents("../../../Database/user.json",$actions);
  echo "File submitted";
}
require_once file_footer();
?>
</body>
</html>