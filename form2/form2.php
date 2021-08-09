<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    .form {

        width: 68%;
        height: 700px;
        background-color: #DFC1D9;
        margin-top: 100px;
        margin-left: 224px;
        padding: 24px;
    }

    input[type="text"] {
        width: 100%;
        border-radius: 6px;
        height: 33px;
    }

    input[type="password"] {
        height: 33px;
        width: 100%;
        border-radius: 6px;
    }

    input[type="number"] {
        height: 33px;
        width: 100%;
        border-radius: 6px;
    }

    input[type="submit"] {

        width: 100%;
        padding: 6px;
        font-size: 17px;
        font-family: Verdana, Geneva, Tahoma, sans-serif;
    }
</style>

<body>


    <div>


        <div class="form">

            <form action="post2.php" method="post">

                <label for="fname" style="font-size:x-large">First Name:</label><br>
                <input type="text" name="fname" id="fname" placeholder="First Name"><br>
                <label for="lname" style="font-size:x-large">Last Name:</label><br>
                <input type="text" name="lname" id="lname" placeholder="Last Name"><br>
                <label for="ename" style="font-size: x-large;">Email:</label>
                <input type="text" name="ename" id="ename" placeholder="abcdefghi123@gmail.com"><br>
                <label for="pname" style="font-size: x-large;">Password:</label><br>
                <input type="password" name="pname" id="pname" placeholder="Password"><br>
                <label for="numname" style="font-size: x-large;">Number:</label><br>
                <input type="number" name="numname" id="numname"><br> <br>
                <label for="mname" style="font-size: x-large;">Male:</label>
                <input type="checkbox" name="mname" id="cname">
                <label for="rname" style="font-size: x-large;">Female:</label>
                <input type="checkbox" name="rname" id="rname"><br><br>
                <textarea name="tname" style="width: 100%;height:172px" placeholder="Text here.......!"></textarea><br><br>
                <input type="submit" value="Submit">








            </form>


        </div>



    </div>



</body>

</html>