<?php
require_once __DIR__."/../../../bootstrap/app.php";
//session_start();

// click submit button
if (isset($_POST['submit']))
{
   
// variables
    $email = $_POST['email'];
    $password = $_POST['password'];

// empty fields for required message
if ($email=='' || $password=='')
{
    echo" *fields are required";
}
else
{
$data = json_decode(file_get_contents('Database/user.json'), true);  //get dat
//$dataa = json_encode($data ,JSON_PRETTY_PRINT);
//print_r($data);
    //print_r($data);
$filter = array_filter($data, function ($data) 
{
if ($data['email'] == $_POST['email'] || ($data['password'] == $_POST['password']))
{
     $_SESSION['is_submit'] = true;
    $_SESSION['email'] = $data['email'];
    $_SESSION['password'] = $data['password'];
    $_SESSION['fname'] = $data['first name'];
    $_SESSION['selectRole'] = $data['select-role'];
    return $data;
} 
});

   


if ($filter==true)
{
    header("Location: ./dashboard.php");
} 
else
{
    echo "Invalid email and password";
}
} 
}
?>