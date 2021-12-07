<?php
require_once __DIR__."/Bootstrap/app.php";
require_once file_header();
$conn = mysqli_connect('localhost', 'root', '', 'database');
$sql1 = "SELECT * FROM form";
$query = mysqli_query($conn, $sql1);
echo "Hello ".$fetch['First Name'].'&nbsp'.$fetch['First Name'].'<br>'.
"You are successfully logged in";
?>