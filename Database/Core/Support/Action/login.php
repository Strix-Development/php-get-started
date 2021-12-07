<?php
require_once __DIR__."../../../../Bootstrap/app.php";
$conn = mysqli_connect('localhost', 'root', '', 'database');
$sql1 = "SELECT * FROM form WHERE Email='".$_POST['email']."' ";
$query = mysqli_query($conn, $sql1);
if ($_POST['email']=="" || $_POST['password']=="") {
    echo "All fields are required";
}
elseif (mysqli_num_rows($query) > 0) {
    $fetch = mysqli_fetch_assoc($query);
if($_POST['password']  === $fetch['Password']){
    $_SESSION['email']=$_POST['email'];

    header("Location:dashboard.php");
}
else{
    echo "Invalid username or password";
}
}
?>