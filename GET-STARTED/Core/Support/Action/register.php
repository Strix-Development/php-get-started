<?php
require_once __DIR__ . "../../../../Bootstrap/app.php";
// header called 
require_once file_header();
//check if all fields are filled and password matched or not
if (
  $_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['tel'] == '' || $_POST['email'] == ''
  || $_POST['password'] == ''  || $_POST['confirmpassword'] == '' || $_POST['role'] == ''
) {
  echo 'All fields are required';
} elseif ($_POST['password'] !== $_POST['confirmpassword']) {
  echo "Password doesn't match";
} else {
  //if all fields are filled and password match
  $action = array(
    "First Name" => $_POST["fname"],
    "Last Name" => $_POST["lname"],
    "E-mail" => $_POST["email"],
    "Phone number" => $_POST["tel"],
    "Password" => $_POST['password'],
    "Confirm Password" => $_POST['confirmpassword'],
    "Role" => $_POST['role']
  );
  //json_decode and get data from file
  $action1 = json_decode(file_get_contents("./Database/user.json"), true);
  //variable with data
  $action1[] = $action;
  //json_encode array and JSON_PRETTY_PRINT-proper line breaks, indentation, white space, and overall structure.
  $actions = json_encode($action1, JSON_PRETTY_PRINT);
  //saved data in "./Database/user.json"
  file_put_contents("./Database/user.json", $actions);
  echo "File submitted";
}
?>