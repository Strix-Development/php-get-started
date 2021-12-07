<!DOCTYPE html>
<html>
<head>
  <title>Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <div class="container">
      <!-- logo -->
      <a class="navbar-brand" href="../../../../index.php">Logo</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- dropdown -->
      <ul class="navbar-nav">
        <li class="nav-item dropdown">
          <?php        
            echo '<a class="nav-link dropdown-toggle" role="button" data-bs-toggle="dropdown">Log in</a>
           <ul class="dropdown-menu">
             <li><a class="dropdown-item" href="../../../login.php">Sign in</a></li>
             <li><a class="dropdown-item" href="../../../register.php">Sign up</a></li>
           </ul>';
          ?>
        </li>
      </ul>
    </div>
  </nav>
<?php
require_once __DIR__."../../../../Bootstrap/app.php";
$servername = "localhost";
$username = "root";
$password = "";
$database = "database";
$conn = mysqli_connect($servername, $username, $password, $database);
$sql1 = "SELECT * FROM form WHERE Email='" . $_POST['email'] . "'";
$query = mysqli_query($conn, $sql1);
if (isset($_POST['submit'])) {

    if ($_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['tel'] == '' || $_POST['email'] == '' ||
        $_POST['address'] == '' || $_POST['password'] == '' || $_POST['confirmpassword'] == ''
        || $_POST['state'] == '' || $_POST['city'] == '' || $_FILES['uploadfile']['name']=='') {
        echo "All fields are required";
    } else if (mysqli_num_rows($query) > 0) {
        $fetch = mysqli_fetch_assoc($query);
        $_SESSION['fname']=$fetch['First Name'];
        if ($_POST['email'] === $fetch['Email']) {
            echo "User already registered";
        }
    } elseif ($_POST['password'] !== $_POST['confirmpassword']) {
        echo "Password doesn't match";
    } else {
;

        $filename = $_FILES["uploadfile"]["name"];
        $tempname = $_FILES["uploadfile"]["tmp_name"];
        $folder = "../../../Images/" . $filename;
          move_uploaded_file($tempname, $folder);
        $sql = " INSERT INTO form(`First Name`,`Last Name`,`Phone Number`,`Email`,
    `Password`,`Address`,`State`,`City`,`Image`)
    VALUES('" . $_POST['fname'] . "','" . $_POST['lname'] . "','" . $_POST['tel'] . "','" . $_POST['email'] . "',
    '" . $_POST['password'] . "','" . $_POST['address'] . "','" . $_POST['state'] . "','" . $_POST['city'] . "',
    '" . $filename . "')";
    if ($conn->query($sql)) {
      echo "User registered successfully";
  } else {
      echo "Error: " . $conn->error;
  }
    }
}


/*FOR DISPLAY IMAGE
$conn=mysqli_connect("localhost","root","","database");
$sqlimage = "SELECT `Image` FROM form where Id=29";
$image = mysqli_query($conn,$sqlimage);

$rows = mysqli_fetch_assoc($image);
    $img = $rows['Image'];    
<img src="<?php echo "Images/".$img ?>" alt="">*/
require_once file_footer();