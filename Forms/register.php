<?php
if(empty($_POST["fname"])){
    echo "Please enter your first name <br>";
}else{
    echo "First Name:".$_POST["fname"];
    echo "<br>";
}
if(empty($_POST["lname"])){
    echo "Please enter your last name<br>";
}else{
    echo "Last Name:".$_POST["lname"];
    echo "<br>";
}
if(empty($_POST["email"])){
    echo "Please enter your email<br>";
}
if(empty($_POST["password"])){
    echo "Please enter your password<br>";
}
if ($_POST["password"]!=$_POST["confirmpassword"]) {
    echo "Your password doesn't match <br>";
}
if(empty($_POST["number"])){
    echo "Please enter your number<br>";
}else{
    echo "Number:".$_POST["number"];
}
?>