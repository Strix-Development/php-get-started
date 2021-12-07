<?php
require_once __DIR__ . "../../../../Bootstrap/app.php";
if ($_POST['email'] == '' || $_POST['password'] == '') {
    echo "All fields are required";
} else {
    $action = json_decode(file_get_contents('Database/user.json'), true);
    $filter = array_filter($action, function ($action) 
    {
        if ($action['E-mail'] == $_POST['email']) {
            if ($action['Password'] == $_POST['password']) {
                $_SESSION['fname'] = $action["First Name"];
                $_SESSION['lname'] = $action["Last Name"];
                $_SESSION['email'] = $action["E-mail"];
                $_SESSION['number'] = $action["Phone Number"];
                $_SESSION['role'] = $action["Role"];
                $_SESSION['id']=$action['Id'];
                return $action;
            }
        }
    });
    if ($filter == true) {
        echo header("Location:dashboard.php");
    } else {
        echo "Invalid email or password";
    }
}
$act1 = json_decode(file_get_contents("Database/profile.json"), true);
$filt = array_filter($act1, function ($act1)
{
  if ($act1['E-mail'] == $_POST['email']) {
      $_SESSION['postcode'] = $act1["Post Code"];
      $_SESSION['address'] = $act1["Address"];
      $_SESSION['country'] = $act1["Country"];
      $_SESSION['state'] = $act1["State"];
      return $act1;
  }
});
