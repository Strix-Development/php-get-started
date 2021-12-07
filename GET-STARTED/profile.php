<?php
require_once __DIR__ . "/Bootstrap/app.php";
require_once file_header();
?>
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <img class="rounded-circle mt-5" width="150px" src="../Design/Images/facebook.png">
        <?php echo '<b>'.$_SESSION['fname'].'</b>'?>
        
      </div>
    </div>
    <div class="col-md-5 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">Profile</h4>
        </div>
        <form method="post">
          <div class="row mt-2">
            <div class="col-md-6">
              <label class="labels">First Name</label><input type="text" name="fname"
               class="form-control" value="<?php echo $_SESSION['fname'] ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Last Name</label><input type="text" name="lname"
               class="form-control" value="<?php echo $_SESSION['lname'] ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Phone Number</label><input type="tel" name="tel" pattern="[0-9]{10}"
              maxlength="10" class="form-control" value="<?php echo $_SESSION['number'] ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">E-mail</label><input type="email" class="form-control"
               name="email" value="<?php echo $_SESSION['email'] ?>"readonly>
            </div>
            <div class="col-md-6"><label class="labels">Address</label>
              <input type="text" class="form-control" placeholder="Enter your address" 
              name="address" value="<?php if(isset($_SESSION['address'])){ echo $_SESSION['address'];} ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Postcode</label><input type="tel" class="form-control" pattern="[0-9]{6}"
               maxlength="6" name="postcode" placeholder="Enter your postcode" 
               value="<?php if(isset($_SESSION['postcode'])){ echo $_SESSION['postcode'] ;} ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Country</label><input type="text" class="form-control" 
              name="country" placeholder="Enter your country"
               value="<?php if(isset($_SESSION['country'])){ echo $_SESSION['country'] ;} ?>"readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">State</label><input type="text" class="form-control" name="state"
                value="<?php if(isset($_SESSION['state'])){ echo $_SESSION['state'] ;}?>" 
                placeholder="Enter your State"readonly>
            </div>
          </div>
          <div class="mt-5 text-center">
            <a class="btn btn-primary" href="editprofile.php" role="button">Edit</a>
           </div>
        </form>
      </div>
    </div>
  </div>
</div>