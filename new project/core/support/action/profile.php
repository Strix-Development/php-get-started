<?php
require_once __DIR__."/../../../bootstrap/app.php";
// session start();
?>

<?php 
if (isset($_POST['submit'])) 
{
 $Name = $_POST['Name'];
   $Surname = $_POST['Surname'];
   $PhoneNumber = $_POST['PhoneNumber'];
   $Address = $_POST['Address'];
   $EmailID = $_POST['EmailID'];
   $Password = $_POST['Password'];
   $Education = $_POST['Education'];
   $Country = $_POST['Country'];
   $State = $_POST['State'];

if ($Name==''||  $Surname==''|| $PhoneNumber=='' || $Address=='' || $EmailID=='' ||  $Password=='' ||
$Education=='' || $Country=='' || $State== ''){
 echo "*Required";
}
else{ 
    $array = array(
    'Name' => $Name,
    'Surname' => $Surname ,
    'PhoneNumber' => $PhoneNumber,
    'Address' => $Address, 
    'EmailID' => $EmailID,
    'Password' => $Password,
    'Education' => $Education,
    'Country' => $Country,
    'State' => $State,
     
    
);

   $file= json_decode(file_get_contents("Database/profile.json"), true);
   $filter = array_filter( $file , function ($file)
  {
    $_SESSION['id'] = $file['id'] ; 
    $_SESSION['Name'] = $file['Name'];
    $_SESSION['Surname'] = $file['Surname'];
    $_SESSION['PhoneNumber'] = $file['PhoneNumber'];
    $_SESSION['Address'] = $file['Address'];
    $_SESSION['EmailID'] = $file['EmailID'];
    $_SESSION['Password'] = $file['Password'];
    $_SESSION['Education'] = $file['Education'];
    $_SESSION['Country'] = $file['Country'];
    $_SESSION['State'] = $file['State'];
    
    return $file;
    });
   if ($filter==true)
   {
    header("Location: ./editprofile.php");
   } 
   else
   {
    echo "Invalid ";
   }

  //$data[] = $array; 
  //$dataa = json_encode($data ,JSON_PRETTY_PRINT);
  //if(file_put_contents('database/profile.json', $dataa,FILE_APPEND)){
  //echo "welcome";
  //}
  //else
 // {
  //echo "decline";
//}
}
}



?>