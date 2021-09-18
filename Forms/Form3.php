<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
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
      $numerr= "<b><i>Please enter your number<br></i></b>";
    }
    if(empty($_POST["confirmpassword"])){
      $conferr= "<b><i>Please confirm your password<br></i></b>";
    }
   }
  ?>
  <form action="" method="POST">
   <label for="fname">First Name</label><br>
   <input type="text" name="fname" id="fname"><?php echo $fnameerr ?><br>
   <label for="lname">Last Name</label><br>
   <input type="text" name="lname" id="lname"><?php echo $lnameerr ?><br>
   <label for="email">E-mail</label><br>
   <input type="email" name="email" id="email"><?php echo $emailerr ?><br>
   <label for="password">Password</label><br>
   <input type="password" name="password" id="password"><?php echo $passwerr ?><?php echo $passerr ?><br>
   <label for="confirmpassword">Confirm Password</label><br>
   <input type="password" name="confirmpassword" id="confirmpassword"><?php echo $conferr ?><?php echo $passerr ?><br>
   <label for="number">Phone Number</label><br>
   <input type="tel" name="number" id="number" pattern="[0-9]{10}"><?php echo $numerr ?><br><br>
   <input type="submit" name="submit" value="Submit">
  </form>
  <?php
   if (isset($_POST["submit"])) {
     echo "<h3>Your information:</h3>";
      if($_POST["fname"]){
         echo "Full Name:".$_POST["fname"]."&nbsp".$_POST["lname"];
         echo "<br>";
     }
     if($_POST["email"]){
      echo "E-mail:".$_POST["email"];
      echo "<br>";
     }  
     if($_POST["number"]){
         echo "Number:".$_POST["number"];
         echo "<br>";
     }
    }
 ?>
</body>
</html>