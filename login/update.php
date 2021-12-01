<?php


//FETCH DATA AS IT IS USING ID AND PREPARE FOR UPDATE


require_once __DIR__. "./dbconnect.php";
require_once __DIR__. "/action/header.php";
session_start();
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";
// create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
//if (!$conn) {
//die("Connection failed:". mysqli_connect_error());
//}

  $id = $_GET['id'];
  $sql = "SELECT * FROM tbluser WHERE id = $id";
  $resul = mysqli_query($conn,$sql) or die("query unsuccessful");
  if(mysqli_num_rows($resul)>0)
  {
      while($result = mysqli_fetch_assoc($resul))
      {
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
.errorcolor {color:red;}   
</style>
</head>

<body>
<h2> FORM  </h2>
<form method="get" enctype="multipart/form-data" action="update2.php">
<label for="fname">First Name</label>
<input type="hidden" name="id" value="<?php echo $result['id']?>">
<input type="text" name="fname" id= "fname" autocomplete="off" autofocus value="<?php echo $result['fname']?>"><br><br>

<label for="lname">Last Name</label>
<input type="text" name="lname" id= "lname" autocomplete="off" value="<?php echo $result['lname']?>" ><br><br>


<label for="email"> Email </label>
<input type="email" name="email" id="email" value="<?php echo $result['email']?>"><br><br>

<label for="password"> Password </label>
<input type="password" name="password" id="password" autocomplete="off" value="<?php echo $result['password']?>"><br><br>

<label for="cpassword"> Confirmed Password </label>
<input type="password" name="cpassword" id="cpassword" autocomplete="off" value="<?php echo $result['cpassword']?>"><br><br>


<label for="num"> contact </label>
<input type ="number" name="contact" id="num"  value="<?php echo $result['contact']?>"><br><br>
<input type="submit" name="update" value="update"> 
 


</form>
<?php
  }
}
?>


</body>
</html>