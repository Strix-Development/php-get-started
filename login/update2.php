<?php
// CLICK UPDATE BUTTON AND DATA IS UPDATE
session_start();
require_once __DIR__. "./dbconnect.php";
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
//else{
  //  echo "successfull";
//}


if(isset($_REQUEST['update'])){
 $id = $_GET['id'];
 $fname = $_REQUEST['fname'];
 $lname = $_REQUEST['lname'];
 $email = $_REQUEST['email'];
 $password = $_REQUEST['password'];
 $cpassword = $_REQUEST['cpassword'];
 $num = $_REQUEST['contact'];
 


$sql = "update tbluser set fname='$fname',lname='$lname',email='$email',password='$password',cpassword='$cpassword',contact ='$num' where id='$id'";
if ($conn->query($sql) === TRUE) {
  //echo "update";
  header("location:profile.php");
} else {
  echo "Error updating record: " . $conn->error;
}


$conn->close();
}
?>