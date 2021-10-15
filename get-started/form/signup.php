
<title>Sign up</title>    

<style>

input[type=submit]:hover{
    width: 20%;
   background-color:tomato;
} 
</style>


<!-- including kernel file -->
<?php include_once '../bootstrap/app.php' ?>


<!-- container div start -->
<div class="container">
    <?php require_once header_file(); ?>


<!--main form div  -->
<div class="form">
<form action=""  method="post">


<!-- field set -->
<fieldset>
    <legend>Sign Up</legend>

<input type="hidden" name="action" value="register"> 


<!-- first name div -->
<div class="fname">
<label for="name">First-name :</label>
<input type="text" name="fname" id="fname">
</div><br><br>
<!-- close -->


<!-- last name div -->
<div class="lname">
<label for="lname">Last-name :</label>
<input type="text" name="lname" id="lname">
</div><br><br>
<!-- close -->


<!-- email div -->
<div class="email">
<label for="email">Email :</label>
<input type="email" name="email">
</div><br><br>
<!-- close -->


<!-- password div -->
<div class="password">
<label for="password">Password :</label>
<input type="password" name="password" id="password">
</div><br><br>
<!-- close -->


<!-- confirm password div -->
<div class="cpass">
<label for="con-pass">Confirm-password :</label>
<input type="password" name="con-pass" id="con-pass">
</div><br><br>
<!-- close -->


<!-- number div -->
<div class="number">
<label for="number">Phone-number :</label>
<input type="text" name="number" id="number">
</div><br><br>
<!-- close -->


<!-- select option div -->
<div class="role">
<label for="role">Role:</label>
<select name="role" id="role">
    <option value="none"></option>
    <option value="admin">Admin</option>
    <option value="editor">Editor</option>
    <option value="user">User</option>
</select> 
</div><br><br>
<!-- close -->


<!-- submit button div -->
<div class="submit">
<input type="submit" name="submit" value="SUBMIT">
</div><br>
<!-- close -->

<p>Already have an accout?<a href="login.php">Login</a></p>
</fieldset>

</form>

<!-- image div -->
<div class="img" style="    float: right;
    margin: -665px 0;">
    <img src="../image/image.jpg" alt="">
</div>
<!-- close -->
</div>

<!-- including footer -->
<?php require_once footer_file() ?>

</div>
<!-- container close -->
