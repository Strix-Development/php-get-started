<!DOCTYPE html>
<html>
    <head>
        <title>
            Form
        </title>
    </head>
    <body>
      <form action="form.php" method="POST">
          <label for="fname">First Name</label><br>
          <input type="text" name="fname" id="fname" placeholder="Ram"><br>
          <label for="lname">Last Name</label><br>
          <input type="text" id="lname" name="lname" placeholder="Ram"><br>
          <label for="number">Phone Number</label><br>
          <input type="text" id="number" name="number"placeholder="Enter your phone number here "><br>
          <label for="email">E-mail</label><br>
          <input type="text" id="email" name="email" placeholder="Enter your e-mail here"><br>
          <label for="email">Confirm your e-mail</label><br>
          <input type="text" id="email" name="email" placeholder="Confirm your e-mail here"><br><br>
          <input type="submit" value="Submit">
       </form>
    </body>
</html>