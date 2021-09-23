<!DOCTYPE html>
<html>
<head>
    <title>Form</title>
</head>
<body>
  <h1>Form</h1>
  <form action="register.php" method="POST">
   <label for="fname">First Name</label><br>
   <input type="text" name="fname" id="fname"><br>
   <label for="lname">Last Name</label><br>
   <input type="text" name="lname" id="lname"><br>
   <label for="email">E-mail</label><br>
   <input type="email" name="email" id="email"><br>
   <label for="password">Password</label><br>
   <input type="password" name="password" id="password"><br>
   <label for="confirmpassword">Confirm Password</label><br>
   <input type="password" name="confirmpassword" id="confirmpassword"><br>
   <label for="number">Phone Number</label><br>
   <input type="tel" name="number" id="number" pattern="[0-9]{10}" maxlength="10"><br><br>
   <input type="submit" name="submit" value="Submit">
  </form>
</body>
</html>