<?php
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
 // die("Connection failed:". mysqli_connect_error());
//}

?>

<?php
if(isset($_POST['submit'])){

 $fname = $_POST['fname'];
 $lname = $_POST['lname'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $cpassword = $_POST['cpassword'];
 $contact = $_POST['contact'];
 

 



 // field required and password validation
 if ($fname==''||  $lname==''||$email=='' || $password=='' || $cpassword=='' || $contact=='')
 {
 echo "fields are required <br>";
 }
 if($password !== $cpassword)
 {
 echo "password is not same <br>";
 }
 
 // check if email is already in database
 $sjl = $conn->query( "SELECT * FROM tbluser WHERE email = '$email'");
if($email === '' || !preg_match('/^.{1,62}@.{1,62}\.[a-zA-Z]{2,4}$/', $email)){
 echo "please enter a valid email <br>";
}

 elseif ($sjl->num_rows>0)
{
 echo "email is already exist <br>";
 }
else 
 {
 //insert value in table
 $sql = "INSERT INTO tbluser (fname,lname,email,password,cpassword,contact)
 VALUES ('$fname','$lname','$email','$password','$cpassword','$contact')";
 if (mysqli_query($conn, $sql))
 {
 echo "new record add successfully<br>";
 header("location:login.php");
 }
 else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
 }
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
    <p class="login-text" style="font-size: 2rem; font-weight: 800;"> register </p>

    <input type="hidden" value="register" name="action">

    <div class="input-group">
    <label for="fname"></label>
    <input id="fname" type="text" placeholder="First Name"  name="fname" >
    </div><br>

    <div class="input-group">
    <label for="lname"></label>
     <input  id= "lname" type="text" placeholder="Last Name"  name="lname" >
    </div><br>
            
    <div class="input-group">
    <label for="email"></label>
    <input id="email" type="email" placeholder="email" name="email" >
    </div><br>

    <div class="input-group">
    <label for="password"></label>
    <input id="password" type="password" placeholder="password" name="password" >
    </div><br> 

    <div class="input-group">
    <label for="cpassword"></label>
    <input id= "cpassword" type="password" placeholder="Confirm password" name="cpassword" >
    </div> <br>
            
           
    <div class="input-group">
    <label for="contact"></label>
    <input type="tel" id= "contact" type="number" name="contact" placeholder="phone number" >
    </div> <br>


 


     <div class="input-group">
     <input type="submit" name="submit" value="submit" >  
     </div>


    <p class="login-register-text">  Have an account? <a href="./login.php"> login here</a></p>
    </form>
  </div>
</body>
</html>