<?php
// functions called
require_once __DIR__."/Bootstrap/app.php";
// header called
require_once file_header();
?>
<div class="container">
  <div class="row">
    <div class="col-md-6 offset-md-3">
      <div class="signup-form">
        <form class="mt-5 border p-4 bg-light shadow" method="post" action="Core/Support/Action/dbaction.php" enctype="multipart/form-data">
          <h4 class="mb-5 text-secondary">Sign Up</h4>
          <div class="row">
            <div class="mb-3 col-md-6">
              <!-- <input type="hidden" name="action" value="dbaction"> -->
              <!-- form data -->
              <label>First Name:</label>
              <input type="text" name="fname" class="form-control" placeholder="Enter First Name">
            </div>
            <div class="mb-3 col-md-6">
              <label>Last Name:</label>
              <input type="text" name="lname" class="form-control" placeholder="Enter Last Name">
            </div>
            <div class="mb-3 col-md-6">
              <label>Number:</label>
              <input type="tel" name="tel" class="form-control" placeholder="Enter Phone Number" pattern="[0-9]{10}" maxlength="10">
            </div>
            <div class="mb-3 col-md-6">
              <label>Email:</label>
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
            <div class="mb-3 col-md-6">
              <label>Address:</label>
              <input type="text" name="address" class="form-control" placeholder="Enter your address" >
            </div>
            <div class="mb-3 col-md-6">
              <label>State:</label>
              <input type="text" name="state" class="form-control" placeholder="Enter your state" >
            </div>
            <div class="mb-3 col-md-6">
              <label>City:</label>
              <input type="text" name="city" class="form-control" placeholder="Enter your city" >
            </div>
            <div class="mb-3 col-md-6">
              <label>Image:</label>
              <input type="file" name="uploadfile"  class="form-control" >
            </div>
            <br><br>
            <div class="col-md-12">
              <!-- submit -->
              <input type="submit" class="btn btn-danger" name="submit" value="submit">
            </div>
            <div>
              <p class="mb-0">Already have an account?<a href="login.php">login</a></p>
            </div>
          </div>
      </div>
      </form>
    </div>
  </div>
</div>
<?php
//footer called
require_once file_footer();
?>