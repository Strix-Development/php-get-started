<?php

$name = $_POST['fname'] ."<br>";
if($name = $_POST['fname']){
    //echo $name;
}else{
    echo "<span style='color:red;'>". '*Name is required' ."</span>";
    exit;
} 

echo "<br>";
 
$lname = $_POST['lname'] ."<br>";
if($lname = $_POST['lname']){
     //echo $lname;
}else{
    echo "<span style='color:red;'>". '*Last Name is required' ."</span>";
    exit;    
}

echo "<br>";


$phone = $_POST['phname'] ."<br>";
if($phone = $_POST['phname']){
     //echo $phone;
}else{
    echo "<span style='color:red;'>". '*phone number is required' ."</span>";
    exit;    
}

echo "<br>";


$email = $_POST['ename'] ."<br>";
if($ename = $_POST['ename']){
    // echo $email;
}else{
    echo "<span style='color:red;'>". '*Email is required' ."</span>";
    exit;    
}


$password =  $_POST['pname'] ."<br>";
$cpassword = $_POST['cpname'] ."<br>";

 if($cpassword == $password){
     //echo $password;
 }else{
    echo "<span style='color:red;'>". '*Wrong password' ."</span>";
    // exit;
 }


include_once __DIR__. '/../helper.php';

files();



?>

