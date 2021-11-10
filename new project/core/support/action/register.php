<?php
// click submit button
if (isset($_POST['submit']))
{
	
    // variables
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $contact = $_POST['contact'];
    $selectRole = $_POST['select-role'];


// empty fields for required message
if ($fname==''||  $lname==''|| $email=='' || $password=='' || $cpassword=='' || $contact=='' || $selectRole=='')
{
   echo "*fields are required";
}
elseif($password !== $cpassword)
{
  echo "*password is not same";
}
//if all fields are filled and password match
else
{
    $array = array(
    'first name' => $fname,
    'last name' => $lname,
    'email' => $email,
    'password' => $password, 
    'cpassword' => $cpassword,
    'contact' => $contact,
    'select-role' =>  $selectRole
   );


 //file_get_content:- read content of the file
 //json_decode and get data from file
 $file= json_decode(file_get_contents("Database/user.json"), true);   


 //ID
 if (count($file) == 0) {
  $array['id'] = 1;
} 
else
 {
  $id = [];
  foreach ($file as $data_transfer) {
    array_push($id, $data_transfer['id']);
    $new_variable = count($id)+1;
    $array['id'] = $new_variable;
  }
}


 // check email is already register
  $filter = array_filter($file, function ($file) 
  {
  if ($file['email'] == $_POST['email']) 
  {
    return $file;
  }
  });
  if (count($filter)) 
  {
    echo "User already registered";
  }
  else
  {
  $data[] = $array; 
  $dataa = json_encode($data ,true);
  if(file_put_contents('database/user.json', $dataa ,JSON_PRETTY_PRINT )){
  header("Location: ./login.php");
  }
  else
  {
  echo "decline";
  }
  }   
  }   
}
?>