<?php
  //include bootstrap for header and call header function
  require_once __DIR__. "/bootstrap/app.php";
  include file_header();
?>
<div class="container">
    <form class="login-email" method="post" action="">
    <p class="login-text" style="font-size: 2rem; font-weight: 800;"> register </p>

    <input type="hidden" value="register" name="action">

    <div class="input-group">
    <label for="fname"></label>
    <input id="fname" type="text" placeholder="First Name"  name="fname" >
    </div><br>

    <div class="input-group">
    <label for="lname"></label>
     <input  id= "lname" type="text" placeholder="Last Name"  name="lname" >
    </div><br>
            
    <div class="input-group">
    <label for="email"></label>
    <input id="email" type="email" placeholder="email" name="email" >
    </div><br>

    <div class="input-group">
    <label for="password"></label>
    <input id="password" type="password" placeholder="password" name="password" >
    </div><br> 

    <div class="input-group">
    <label for="cpassword"></label>
    <input id= "cpassword" type="password" placeholder="Confirm password" name="cpassword" >
    </div> <br>
            
           
    <div class="input-group">
    <label for="contact"></label>
    <input type="tel" id= "contact" type="number" name="contact" placeholder="phone number" >
    </div> <br>


    <div class="input-group">
    <label for="select-role"> Select Role </label>
    <select id="select-role" name="select-role">
    <option value="Admin">Admin</option>
    <option value="Editor">Editor</option>
    <option value="User">User</option>
    </select>
    </div>


     <div class="input-group">
     <input type="submit" name="submit" value="submit" >  
     </div>


    <p class="login-register-text">  Have an account? <a href="./login.php"> login here</a></p>
    </form>
  </div>



<?php
 //call footer fumction for footer
include file_footer();
?>