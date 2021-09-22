<style>
    .error{
        color:red;
    }
</style>
<?php
if(isset($_POST["submit"])){
if($_POST["password"]!=$_POST["confirmpassword"]){
    echo "<span class='error'>Your password doesnt match</span>";
}
if($_POST["password"]==$_POST["confirmpassword"]){
    if(empty($_POST["fname"])){
        echo"<span class='error'>Please enter your first name<br></span>";
    }else{
       echo "<b>First Name:</b>".$_POST["fname"]."<br>";
    }
    if(empty($_POST["lname"])){
        echo"<span class='error'>Please enter your last name<br></span>";
    }else{
        echo "<b>Last Name:</b>".$_POST["lname"]."<br>";
    }
    if(empty($_POST["email"])){
        echo"<span class='error'>Please enter your email<br></span>";
    }else{
        echo "<b>E-mail:</b>".$_POST["email"]."<br>";
    }
    if(empty($_POST["password"])){
        echo"<span class='error'>Please enter your password<br></span>";
    }
    if(empty($_POST["number"])){
        echo"<span class='error'>Please enter your number<br></span>";
    }else{
        echo "<b>Number:</b>".$_POST["number"]."<br>";
    }
}
}
?>