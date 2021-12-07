<?php
if($_POST['fname'] == '' || $_POST['lname'] == '' || $_POST['tel'] == '' || $_POST['address'] == '' ||
  $_POST['postcode'] == '' || $_POST['country'] == '' || $_POST['state'] == ''){
  echo 'Please fill all fields to save your profile';
} else {
  $act = array(
    "First Name" => $_POST["fname"],
    "Last Name" => $_POST["lname"],
    "Phone Number" => $_POST["tel"],
    "E-mail" => $_POST["email"],
    "Address" => $_POST['address'],
    "Post Code" => $_POST['postcode'],
    "Country" => $_POST['country'],
    "State" => $_POST['state'],
    'Id' => $_SESSION['id'],
  );
  $act1=json_decode(file_get_contents("Database/profile.json"),true);
  $filt = array_filter($act1, function ($act1) {
    if ($act1['E-mail'] == $_POST['email']) {
      return $act1;
    }
  });
  if($filt == true){
    foreach ($act1 as $key => $entry) {
      if ($entry['Id'] == $_SESSION['id']) {
        $act1[$key]['Address'] = $_POST['address'];
        $act1[$key]['Post Code'] = $_POST['postcode'];
        $act1[$key]['Country'] = $_POST['country'];
        $act1[$key]['State'] = $_POST['state'];
        $actions = json_encode($act1, JSON_PRETTY_PRINT);
        file_put_contents('Database/profile.json', $actions);
      }
    }
    echo "Profile saved";
    header("Location:profile.php");
  } else {
    $act1[] = $act;
    $acts = json_encode($act1, JSON_PRETTY_PRINT);
    if (file_put_contents("Database/profile.json", $acts)) {
      echo "Profile saved";
    } else {
      echo "Profile not saved";
    }
  }
}
?>