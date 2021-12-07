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
          <h3 class="text-right">Profile</h3>
        </div>
        <form action="editprofile.php">
        <h5>First Name : <?php echo $fetch['First Name'] ?></h5>
        <h5>Last Name : <?php echo $fetch['Last Name'] ?></h5>
        <h5>Email : <?php echo $fetch['Email'] ?></h5>
        <h5>Phone Number : <?php echo $fetch['Phone Number'] ?></h5>
        <h5>Address : <?php echo $fetch['Address'] ?></h5>
        <h5>State : <?php echo $fetch['State'] ?></h5>
        <h5>City : <?php echo $fetch['City'] ?></h5><br>
        <input type="submit" value="Edit" name="submit" class="btn btn-primary">
        </form>
      </div>
    </div>
  </div>
</div>