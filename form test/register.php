<?php



$name = $_POST['fname'] ."<br>";
if($name != $name){
   echo  $name;
}elseif($name = $_POST['fname']){
    echo $name;
}else{
    echo "<span style='color:red;'>". '*Name is required' ."</span>";
    exit;
}

echo "<br>";

$lname = $_POST['lname'] ."<br>";
if($lname != $lname){
    echo $lname;
}elseif($lname = $_POST['lname']){
     echo $lname;

}else{
    echo "<span style='color:red;'>". '*Last Name is required' ."</span>";
    exit;    
}

echo "<br>";

$email = $_POST['ename'] ."<br>";
if($email != $email){
    echo $email;
}elseif($email = $_POST['ename']){
     echo $email;

}else{
    echo "<span style='color:red;'>". '*Email is required' ."</span>";
    exit;    
}
 
echo "<br>";

$password =  $_POST['pname'] ."<br>";


$cpassword = $_POST['cpname'] ."<br>";

 if($cpassword == $password){
     echo $password;
 }else{
    echo "<span style='color:red;'>". '*Wrong password' ."</span>";
    exit;
 }





?>