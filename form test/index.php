<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<style>
    input[type="text"],
    [type="password"],
    [type="email"] {
        padding: 10px;
        width: 40%;
        margin-top: 20px;
        margin-left: 47px;
    }


    label {
        padding: 10px;
    }

    #ename {
        margin-left: 78px;
    }


    #pname {
        margin-left: 54px;
    }


    #cpname {
        margin-left: 1px;
    }


    [type="submit"] {
        padding: 10px;
        width: 50.50%;
        margin-top: 20px;
        margin-left: 8px;
    }
</style>







<body>



<?php







?>






    <form method="POST" action="register.php">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First Name"><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name"><br>
        <label for="ename">Email:</label>
        <input type="email" name="ename" id="ename" placeholder="Email"><br>
        <label for="pname">Password:</label>
        <input type="password" name="pname" id="pname"><br>
        <label for="cpname">Confirm Password</label>
        <input type="password" name="cpname" id="cpname"><br>
        <input type="submit" value="SUBMIT">

    </form>













</body>

</html>