<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
    <style>
      .err{
        color:red;
      }
    </style>
</head>
<body>
  <?php
    $passerr=$fnameerr=$lnameerr=$emailerr=$passwerr=$numerr=$conferr="";
     if (isset($_POST["submit"])) {
      if($_POST["password"]!=$_POST["confirmpassword"]){
        $passerr="<b><i>Password doesnt match</i></b>";
      }
      if(empty($_POST["fname"])){
        $fnameerr= "<b><i>Please enter your first name</i></b>";
     }
     if(empty($_POST["lname"])){
      $lnameerr= "<b><i>Please enter your last name</i></b>";
    }
    if(empty($_POST["email"])){
      $emailerr= "<b><i>Please enter your email</i></b>";
    }
    if(empty($_POST["password"])){
      $passwerr="<b><i>Please enter your password</i></b>";
    }
    if(empty($_POST["number"])){
      $numerr= "<b><i>Please enter your number</i></b>";
    }
    if(empty($_POST["confirmpassword"])){
      $conferr= "<b><i>Please confirm your password</i></b>";
    }
   }
  ?>
  <form action="" method="POST">
   <label for="fname">First Name</label><br>
   <input type="text" name="fname" id="fname">
   <span class="err"> <?php echo $fnameerr ?></span><br>
   <label for="lname">Last Name</label><br>
   <input type="text" name="lname" id="lname">
   <span class="err"><?php echo $lnameerr ?></span><br>
   <label for="email">E-mail</label><br>
   <input type="email" name="email" id="email">
   <span class="err"><?php echo $emailerr ?></span><br>
   <label for="password">Password</label><br>
   <input type="password" name="password" id="password">
   <span class="err"><?php echo $passwerr ?><?php echo $passerr ?></span><br>
   <label for="confirmpassword">Confirm Password</label><br>
   <input type="password" name="confirmpassword" id="confirmpassword">
   <span class="err"><?php echo $conferr ?><?php echo $passerr ?></span><br>
   <label for="number">Phone Number</label><br>
   <input type="tel" name="number" id="number" pattern="[0-9]{10}">
   <span class="err"><?php echo $numerr ?></span><br><br>
   <input type="submit" name="submit" value="Submit">
  </form>
  <?php
   if (isset($_POST["submit"])) {
     echo "<h3>Your information:</h3>";
      if($_POST["fname"]){
         echo "<b>Full Name:</b>".$_POST["fname"]."&nbsp".$_POST["lname"];
         echo "<br>";
     }
     if($_POST["email"]){
      echo "<b>E-mail:</b>".$_POST["email"];
      echo "<br>";
     }  
     if($_POST["number"]){
         echo "<b>Number:</b>".$_POST["number"];
         echo "<br>";
     }
    }
 ?>
</body>
</html>