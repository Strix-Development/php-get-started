<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM</title>
</head>

<style>
    body {

        background-image: url(https://live.staticflickr.com/8375/8508675545_18fbca2119_k.jpg);
        background-repeat: no-repeat;

    }

    form {

        margin-left: 450px;
    }


    input[type="text"],
    [type="password"],
    [type="email"] {
        padding: 10px;
        width: 40%;
        margin-top: 20px;
        margin-left: 47px;
        background-color: transparent;
        color: white;
    }


    input[type="number"] {
        padding: 10px;
        width: 40.30%;
        margin-top: 20px;
        margin-left: 51px;
        background-color: transparent;
        color: white;
    }

    label {
        padding: 10px;
        color: white;
    }

    #ename {
        margin-left: 82px;
    }


    #pname {
        margin-left: 54px;
    }

    #cpname {
        margin-left: -4px;
    }


    [type="submit"] {
        padding: 10px;
        width: 35%;
        margin-top: 20px;
        margin-left: 33px;
        background-color: tomato;
        border-radius: 8px;
    }



    [type="submit"]:hover {

        background-color: lightgreen;
    }



    .dropdown ul li a:hover {
        background-color: black;
    }



    .foot {

        padding: 30px;
        text-align: center;
        background: antiquewhite;
        height: 80px;
        margin-top: 84px;

    }
</style>





<body>



    <?php

    require_once __DIR__. '/bootstrap/app.php';

     require_once header_file();
     //header function
    include_once __DIR__ . '/core/support/kernel.php';

    ?>




    <form method="POST" action="">
        <input type="hidden" value="register" name="action">

        <label for="fname">First Name:</label>
        <input type="text" name="fname" id="fname" placeholder="First Name"><br>
        <label for="lname">Last Name:</label>
        <input type="text" name="lname" id="lname" placeholder="Last Name"><br>
        <label for="phname">Phone no:</label>
        <input type="number" name="phname" id="phname"><br>
        <label for="ename">Email:</label>
        <input type="email" name="ename" id="ename" placeholder="Email"><br>
        <label for="pname">Password:</label>
        <input type="password" name="pname" id="pname"><br>
        <label for="cpname">Confirm Password</label>
        <input type="password" name="cpname" id="cpname"><br>
        <label>ROLE:</label>
        <select id="role" name="role">
            <option value=""></option>
            <option value="admin">Admin</option>
            <option value="editor">Editor</option>
            <option value="user">User</option>
        </select>
        <input type="submit" name="submit"value="SUBMIT">

    </form>


</body>

</html>


<?php include_once footer_file() ?>