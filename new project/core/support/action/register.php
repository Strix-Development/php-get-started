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
    "*fields are required";
}
elseif($password != $cpassword)
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
    //file_put_content:- creat a new file for registerd data
    $data[] = $array; 
    //json_encode array and JSON_PRETTY_PRINT-proper line breaks, indentation, white space, and overall structure.
    $dataa = json_encode($data ,JSON_PRETTY_PRINT);

    //saved data in "./Database/user.json"
  if(file_put_contents('database/user.json', $dataa)){
    // echo "registeration is successfull";
    header("Location:./login.php");
  }
  else
  {
  echo "decline";
  }
  }   
  }   
}
?>