<!DOCTYPE html>
<html>
    <head>
        <title>
            Form
        </title>
    </head>
    <body>
        <h1>Form</h1>
        <form action="Form2action.php" method="POST" autocomplete="off">
            <fieldset style="width:20%;">
              <legend><b>Information About You</b></legend>
              <label for="fname"><b>First Name:</b></label><br>
              <input type="text" name="fname" id="fname" placeholder="Enter your first name" required><br>
              <label for="lname"><b>Last Name:</b></label><br>
              <input type="text" name="lname" id="lname" placeholder="Enter your last name" required><br>
              <label for="phonenumber"><b>Phone Number:</b></label><br>
              <input type="tel" name="phonenumber" id="phonenumber" placeholder="0123-45-6789"
              pattern="[0-9]{10}"required><br>
              <label for="email"><b>E-mail:</b></label><br>
              <input type="email" name="email" id="email" placeholder="Enter your email" required><br>
              <label for="email"><b>Confirm email:</b></label><br>
              <input type="email" name="email" id="email" placeholder="Confirm your email" required><br><br>
              <input type="submit" value="Submit">
              <input type="reset" value="Reset">
            </fieldset>
        </form>
    </body>
</html>
