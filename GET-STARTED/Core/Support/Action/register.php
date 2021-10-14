<?php
//check if all fields are filled and password matched or not
if ($_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['tel'] == '' || $_POST['email'] == ''
  || $_POST['password'] == ''  || $_POST['confirmpassword'] == '' || $_POST['role'] == ''){
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
  $action1 = json_decode(file_get_contents("Database/user.json"), true);
  //id
  if (count($action1) == 0) {
    $action['id'] = 1;
  } else {
    $id = [];
    foreach ($action1 as $act1) {
      array_push($id, $act1['id']);
      $act = count($id) + 1;
      $action['id'] = $act;
    }
  }
  //check if email already registered
  $filter = array_filter($action1, function ($action1) {
    if ($action1['E-mail'] == $_POST['email']) {
      return $action1;
    }
  });
  if (count($filter)) {
    echo "User already registered";
  }else{
  //variable with data
  $action1[] = $action;
  //json_encode array and JSON_PRETTY_PRINT-proper line breaks, indentation, white space, and overall structure.
  $actions = json_encode($action1, JSON_PRETTY_PRINT);
  //saved data in "./Database/user.json"
  if (file_put_contents("Database/user.json", $actions)) {
    echo "User successfully registered";
  } else {
    echo "Not registered";
  }
}
}
?>