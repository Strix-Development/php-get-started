
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .errorcolor {color:red;}    /*class*/
    </style>
</head>

<body>
 
<?php
require_once __DIR__."/register.php";
 ?>   
<h2> FORM WITH VALIDATION </h2>
<p><span class= "errorcolor"> * mendatory field </span> </p>    <!--form ke upr ayegi ye validation  -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" autocomplete="on" >

<label for="fname">First Name</label>
 <input type="text" name="fname" id= "fname" autocomplete="off" autofocus>
 <span class="errorcolor">* <?php echo "$fnameerror"; ?></span><br><br>



<label for="lname">Last Name</label>
 <input type="text" name="lname" id= "lname" autocomplete="off" >
 <span class="errorcolor">* <?php echo "$lnameerror"; ?></span><br><br>



<label for="pass"> Password </label>
<input type="password" name="pass" id="pass" autocomplete="off">
<span class="errorcolor">* <?php echo "$passerror"; ?></span><br><br>



<label for="pass1"> Confirmed Password </label>
<input type="password" name="password" id="pass1" autocomplete="off">
<span class="errorcolor">* <?php echo "$conpasserror"; ?></span><br><br>



<label for="email"> Email </label>
<input type="text" name="email" id="email" required >
<span class="errorcolor">* <?php echo "$emailerror"; ?></span><br><br>



<label for="num"> Phone Number </label>
<input type ="number" name="num" id="num" pattern="[000-000-0000]">
<span class="errorcolor">* <?php echo "$numerror"; ?></span><br><br>


<button type="submit" name="submit"  id="submit">Sign Up</button>
</form>

<?php
echo $fname;
echo "<br>";
echo $lname;
echo "</br>";
echo $email;
echo "<br>";
echo $num;
echo "<br>";
?>

</body>
</html>