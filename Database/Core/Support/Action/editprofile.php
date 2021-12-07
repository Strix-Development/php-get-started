<?php
require_once __DIR__."../../../../Bootstrap/app.php";
$conn = mysqli_connect('localhost', 'root','','database');
if(isset($_POST['submit'])){
    $sql='UPDATE form SET `First Name`= "'.$_POST['fname'].'",`Last Name`= "'.$_POST['lname'].'",
    `Phone Number`= "'.$_POST['tel'].'",`Address`= "'.$_POST['address'].'",`State`= "'.$_POST['state'].'",
    `City`= "'.$_POST['city'].'" WHERE Email = "'.$_POST['email'].'" ';
    if(!empty($_FILES["uploadfile"]["name"])){
        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../../../Images/" . $filename;
         move_uploaded_file($tempname, $folder);
        $sql='UPDATE form SET `Image`="'.$filename.'"WHERE Email = "'.$_POST['email'].'" ';
    }
    if ($conn->query($sql)) {
        header("Location:../../../profile.php");
    } else {
        echo "Error: " . $conn->error;
    }
}
?>