<?php

if(isset($_POST['submit'])){

     $name= $_POST['fname'];
    $lname= $_POST['lname'];
    $phone= $_POST['phname']; 
    $email= $_POST['ename'];
 $password= $_POST['pname']; 
$cpassword= $_POST['cpname'];
     $role= $_POST['role'];

  if($name=="" || $lname=="" || $phone=="" || $email=="" || $password=="" || $cpassword=="" || $role==""){

    echo '*all fields are required';
  }elseif($password !== $cpassword){

    echo '*wrong password';
}elseif(strlen($phone)<10 || strlen($phone)>10){
  echo 'enter valid no[0-9]';
}
else{

    $array = array(

          'first name' =>  $name,
          'last name'  =>  $lname,
          'phone no.'  =>  $phone,
          'email'      =>  $email,
          'password'   =>  $password,
          'role'       =>  $role,
                 
          );  

$data=json_decode(file_get_contents('database/user.json'),true);

if(count($data)==0){
  $array['ID']=1;
}
$unique=[];
foreach($data as $data_transfer){
  array_push($unique,$data_transfer['ID']);
  $new_var=count($unique)+1;
  $array['ID']=$new_var;
}

$filter = array_filter($data , function($data){
  if($_POST['ename'] == $data['email']){
    echo 'This email is already in use';
    exit;
  }   
  });
$data[]=$array;
$data_2=json_encode($data,JSON_PRETTY_PRINT);

if (file_put_contents('database/user.json', $data_2)) {
    // echo "<span style='color:lightgreen;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . 'registration successful' . "</span>";
    header('LOCATION:login.php');
  }else{

    echo "<span style='color:red;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . 'request declined' . "</span>";;
  }
}}
?>
<!-- profile validation starts here..! -->
<?php

if(isset($_POST['button'])){
  $profile_name       = $_POST['name'];
  $profile_lname      = $_POST['lastname'];
  $profile_phone      = $_POST['phone'];
  $profile_address    = $_POST['add'];
  $profile_email      = $_POST['email'];
  $profile_education  = $_POST['edu'];
  $profile_country    = $_POST['count'];
  $profile_state      = $_POST['state'];
  $profile_experience = $_POST['exp'];
  $profile_details    = $_POST['detail'];


if($profile_name=='' || $profile_lname=='' || $profile_phone=='' || $profile_address=='' || $profile_email=='' || $profile_education=='' || $profile_country=='' || $profile_state=='' || $profile_experience=='' || $profile_details==''){

  echo 'add something new';
}else{

  $profile_array=array(
    'Name'               => $profile_name,
    'Surname'            => $profile_lname,
    'PhoneNumber'        => $profile_phone,
    'Address'            => $profile_address,
    'Email ID'           => $profile_email,
    'Education'          => $profile_education,
    'Country'            => $profile_country,
    'State'              => $profile_state,
    'Experience'         => $profile_experience,
    'Additional Details' => $profile_details,
  );
  
//   if($_SESSION['ename']==$profile_array){

// $gets=file_get_contents('database/profile.json',); 
// $pro_decode=json_decode($gets,true);
// $gets=$profile_array;
// $pro_encode=json_encode($gets,JSON_PRETTY_PRINT);
// $puts=file_put_contents('database/profile.json',$pro_encode,FILE_APPEND);
//   }else{
//     echo "Data doesn't match";
//   }
  



$gets=file_get_contents('database/profile.json',); 
$pro_decode=json_decode($gets,true);
$gets=$profile_array;
$pro_encode=json_encode($gets,JSON_PRETTY_PRINT);
$puts=file_put_contents('database/profile.json',$pro_encode,FILE_APPEND);

}






  
}









?>