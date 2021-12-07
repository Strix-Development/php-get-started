<?php
require_once __DIR__ . "/Bootstrap/app.php";
// header called
require_once file_header();
?>
<div class="container">
   <div class="row">
      <div class="col-md-6 offset-md-3">
         <div class="signup-form">
            <form class="mt-5 border p-4 bg-light shadow"  method="post">
               <h4 class="mb-5 text-secondary">Sign in</h4>
               <div class="row">
                  <div class="mb-3 col-md-12">
                      <input type="hidden" name="action" value="login">
                     <!-- form data -->
                     <div class="mb-3 col-md-12">
                        <label>E-mail:</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter E-mail">
                     </div>
                     <div class="mb-3 col-md-12">
                        <label>Password:</label>
                        <input type="password" name="password" class="form-control" placeholder="Enter Password">
                     </div>
                     <div class="col-md-12">
                        <input type="submit" class="btn btn-danger" name="submit" value="Submit">
                     </div>
                     <div>
                        <a class="mb-0" href="#">Forgot password?</a>
                     </div>
                     <div>
                        <p class="mb-0">Dont't have an account?<a href="./register.php">register</a></p>
                     </div>
                  </div>
               </div>
            </form>
         </div>
      </div>
   </div>
</div>
<?php
// footer called
require_once file_footer();
?>