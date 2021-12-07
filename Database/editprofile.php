<?php
require_once __DIR__ . "/Bootstrap/app.php";
require_once file_header();

$conn = mysqli_connect('localhost', 'root','','database');
$sql1 = "SELECT * FROM form where Email = '" . $_SESSION['email'] . "'";
$query = mysqli_query($conn, $sql1);
$fetch = mysqli_fetch_assoc($query);
?>

<div class="container rounded bg-white mt-5 mb-5">
  <div class="row">
    <div class="col-md-3 border-right">
      <div class="d-flex flex-column align-items-center text-center p-3 py-5">
        <img class="rounded-circle mt-5" width="150px" src="<?php echo 'Images/'.$fetch['Image'] ?>">
     
      <b><?php echo $fetch['First Name']?></b>
      </div>
    </div>
    <div class="col-md-5 border-right">
      <div class="p-3 py-5">
        <div class="d-flex justify-content-between align-items-center mb-3">
          <h4 class="text-right">Profile</h4>
        </div>
        <form method="post" action="Core/Support/Action/editprofile.php"  enctype="multipart/form-data">
          <div class="row mt-2">
            <div class="col-md-6">
              <label class="labels">First Name</label><input type="text" name="fname"
               class="form-control" value="<?php echo $fetch['First Name']?>"  >
            </div>
            <div class="col-md-6">
              <label class="labels">Last Name</label><input type="text" name="lname"
               class="form-control" value="<?php echo $fetch['Last Name']?>"  >
            </div>
            <div class="col-md-12">
              <label class="labels">E-mail</label><input type="email" class="form-control"
               name="email"  value="<?php echo $fetch['Email']?>" readonly >
            </div>
            <div class="col-md-6">
              <label class="labels">Phone Number</label><input type="tel" name="tel" pattern="[0-9]{10}"
              maxlength="10" class="form-control" value="<?php echo $fetch['Phone Number']?>"  >
            </div>
   
            <div class="col-md-6"><label class="labels">Address</label>
              <input type="text" class="form-control"   value="<?php echo $fetch['Address']?>"
              name="address"  >
            </div>
            <div class="col-md-6">
              <label class="labels">State</label><input type="text" class="form-control" name="state"
              value="<?php echo $fetch['State']?>"   >
            </div>
            <div class="col-md-6">
              <label class="labels">City</label><input type="text" class="form-control" name="city"
              value="<?php echo $fetch['City']?>"  >
            </div>
            <div class="col-md-12">
            <label class="labels">Image</label>
            <input type="file" name="uploadfile"  class="form-control">
            </div>
          </div>
          <div class="mt-5 text-center">
            <input type="submit" name="submit" class="btn btn-primary" value="Save">
           </div>
        </form>
      </div>
    </div>
  </div>
</div>