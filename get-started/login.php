<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    body {

        background-image: url(https://live.staticflickr.com/8375/8508675545_18fbca2119_k.jpg);
        background-repeat: no-repeat;

    }

    .foot {

        padding: 30px;
        text-align: center;
        background: antiquewhite;
        height: 80px;
        margin-top: 250px;

    }
</style>

<body>

    <?php require_once __DIR__. '/bootstrap/app.php';
     include_once header_file()   ?>

    <form>
        <div class="container">
            <div class="mb-3" style="color: white;">
                <label for="exampleInputEmail1" class="form-label">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" style="background-color: transparent; color:white">
                <div id="emailHelp" class="form-text" style="color: white;">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-3" style="color: white;">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" style="background-color: transparent; color:white">
            </div>
            <div class="mb-3 form-check" style="color: white;">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <p style="color: white;"> Create a new account! if you haven't any of an account yet ? <a href="form.php" style="color: lightblue;font-size:20px">Sign up</a></p>
        </div>
    </form>


</body>

</html>

<?php include_once footer_file()  ?>