<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error{color: red;}
    </style>
</head>
<body>
    <?php
    $name="";
    $password="";
    $nameERR="";
    $emailERR="";
    $numberERR="";
    $lnameERR="";
    $passERR="";
    $cpassERR="";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_POST["submit"])){
        if(empty($_POST["fname"])){
            $nameERR="name should be filled";
        }
        if(empty($_POST["lname"])){
            $lnameERR="last name is required";
        }
        if(empty($_POST["email"])){
            $emailERR="email is required";
        }
        if(empty($_POST["number"])){
            $numberERR="phone number is required";
        }
        
        if(empty($_POST["password"])){
            $passERR="password should be filled";
        }else{
            $password="";
        }
         if($_POST["password"]!=$_POST["pass"]){
            $cpassERR="password didn't matched";
        }
    }}
   


    ?>
<form action=<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?> method="post">

<label for="fname">First-name:</label>
    <input type="text" name="fname" placeholder="First-name">
    <span class="error">*<?php echo $nameERR;?></span><br><br>

<label for="lname">Last-Name:</label>
    <input type="text" name="lname" placeholder="Last-name">
    <span class="error">*<?php echo $lnameERR;?></span><br><br>

<label for="email">Email:</label>
    <input type="email" name="email" placeholder="Email">
    <span class="error">*<?php echo $emailERR ?></span><br><br>

<label for="number"> Phone-number:</label>
    <input type="number" name="number" placeholder="Phone-number">
    <span class="error">*<?php echo $numberERR ?></span><br><br>

<label for="password">Password:</label>
    <input type="password" name="password" placeholder="Password">
    <span class="error">*<?php echo $passERR;  ?></span><br><br>


<label for="pass">Confirm-Password:</label>
    <input type="password" name="pass" placeholder="Confirm-password">
    <span class="error"><?php echo $cpassERR;  ?></span><br><br>

    <input type="submit" name="submit" value="CONFIRM">
    
</form>



</body>
</html>