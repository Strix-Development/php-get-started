<?php
//CLICK DELETE BUTTON AND DATA IS DELETED (USING DELETE QUERY)

require_once __DIR__. "./dbconnect.php";
require_once __DIR__. "/action/header.php";
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "test";
// create connection
//$conn = mysqli_connect($servername, $username, $password, $dbname);
// check connection
//if (!$conn) {
  //  die("Connection failed:". mysqli_connect_error());
    //}
    //else{
      //  echo "successfull";
    //}
    $id = $_GET['id'];
    $sql = "DELETE FROM tbluser WHERE id=$id";
    if($conn->query($sql) === TRUE) {
        header("location:profile.php");
      } else {
        echo "Error updating record: " . $conn->error;
      }
    

?>