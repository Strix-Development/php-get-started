<!DOCTYPE html>
<html>
    <head>
        <title>
            Form
        </title>
    </head>
    <body>
      <form action="Form1action.php" method="POST">
          <label for="fname">First Name</label><br>
          <input type="text" name="fname" id="fname" placeholder="Ram" required><br>
          <label for="lname">Last Name</label><br>
          <input type="text" id="lname" name="lname" placeholder="Ram" required><br>
          <label for="tel">Phone Number</label><br>
          <input type="tel" id="number" name="number"placeholder="Enter your phone number here" required><br>
          <label for="email">E-mail</label><br>
          <input type="email" id="email" name="email" placeholder="Enter your e-mail here" required><br>
          <label for="email">Confirm your e-mail</label><br>
          <input type="email" id="email" name="email" placeholder="Confirm your e-mail here" required><br><br>
          <input type="submit" value="Submit">
       </form>
    </body>
</html>