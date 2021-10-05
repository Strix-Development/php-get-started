<!DOCTYPE html>
<html>
<head>
   <title>Sign up</title>
</head>
<body>
<?php
require_once __DIR__ . "/Bootstrap/app.php";
require_once file_header();
?>
<div class="container">
   <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="signup-form">
            <form class="mt-5 border p-4 bg-light shadow" method="post">
               <h4 class="mb-5 text-secondary">Sign Up</h4>
               <div class="row">
                  <div class="mb-3 col-md-6">
                  <input type="hidden" name="register" value="action">
                     <label>First Name:</label>
                     <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
                  </div>
                  <div class="mb-3 col-md-6">
                     <label>Last Name:</label>
                     <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
                  </div>
                  <div class="mb-3 col-md-6">
                     <label>Number:</label>
                     <input type="tel" name="tel" class="form-control" placeholder="Enter Phone Number" 
                     pattern="[0-9]{10}" maxlength="10">
                  </div>
                  <div class="mb-3 col-md-6">
                     <label>E-mail:</label>
                     <input type="email" name="email" class="form-control" placeholder="Enter E-mail">
                  </div>
                  <div class="mb-3 col-md-6">
                     <label>Password:</label>
                     <input type="password" name="password" class="form-control" placeholder="Enter Password">
                  </div>
                  <div class="mb-3 col-md-6">
                     <label>Confirm Password:</label>
                     <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password">
                  </div>
                  <div class="col-md-12">
                     <button class="btn btn-primary float-end" name="submit">Submit</button>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
require_once file_footer();
?>
</body>
</html>