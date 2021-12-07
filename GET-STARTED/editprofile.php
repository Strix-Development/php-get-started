<?php
require_once __DIR__ . "/Bootstrap/app.php";
require_once file_header();
?>
<script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <img class="rounded-circle mt-5" width="150px" type="file" name="img"
         src="" id="preview">
        <?php echo '<b>' . $_SESSION['fname'] . '</b>' ?>
        <div class="ml-2 col-sm-6">
          <input type="file" name="img" class="file" hidden>
          <div class="input-group-append">
            <button type="button" class="browse btn btn-primary">Choose</button>
          </div>
        </div>
        <script>
          $(document).on("click", ".browse", function() {
            var file = $(this).parents().find(".file");
            file.trigger("click");
          });
          $('input[type="file"]').change(function(e) {
            var fileName = e.target.files[0].name;
            $("#file").val(fileName);

            var reader = new FileReader();
            reader.onload = function(e) {
              document.getElementById("preview").src = e.target.result;
            };
            reader.readAsDataURL(this.files[0]);
          });
        </script>
        <?php // move_uploaded_file("","Database/profile.json")  ?>
      </div>
    </div>
    <div class="col-md-5 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">Profile</h4>
        </div>
        <form method="post">
          <div class="row mt-2">
            <input type="hidden" name="action" value="editprofile">
            <div class="col-md-6">
              <label class="labels">First Name</label><input type="text" name="fname" class="form-control"
               placeholder="Enter your first name" value="<?php echo $_SESSION['fname'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Last Name</label><input type="text" name="lname" class="form-control"
               placeholder="Enter your last name" value="<?php echo $_SESSION['lname'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">Phone Number</label><input type="tel" name="tel" pattern="[0-9]{10}" 
              maxlength="10" class="form-control" placeholder="Enter your number" 
              value="<?php echo $_SESSION['number'] ?>" readonly>
            </div>
            <div class="col-md-6">
              <label class="labels">E-mail</label><input type="email" class="form-control" name="email" 
              placeholder="Enter your e-mail" value="<?php echo $_SESSION['email'] ?>" readonly>
            </div>
            <div class="col-md-6"><label class="labels">Address</label>
              <input type="text" class="form-control" placeholder="Enter your address" name="address"
               placeholder="Enter your address" value="<?php echo @$_SESSION['address'] ?>">
            </div>
            <div class="col-md-6">
              <label class="labels">Postcode</label><input type="tel" class="form-control" pattern="[0-9]{6}"
               maxlength="6" name="postcode" placeholder="Enter your postcode"
                value="<?php echo @$_SESSION['postcode'] ?>">
            </div>
            <div class="col-md-6">
              <label class="labels">Country</label><input type="text" class="form-control" name="country"
               placeholder="Enter your country" value="<?php echo @$_SESSION['country'] ?>">
            </div>
            <div class="col-md-6">
              <label class="labels">State</label><input type="text" class="form-control" name="state" 
              placeholder="Enter your State" value="<?php echo @$_SESSION['state'] ?>">
            </div>
          </div>
          <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit"
           name="submit" value="submit">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>