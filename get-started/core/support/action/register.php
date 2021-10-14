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
}else{

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
  }elseif($_POST['fname'] == $data['first name']){
    echo 'This name has already been taken! Try another one?';
    exit;
  }
    
  });


$data[]=$array;
$data_2=json_encode($data,JSON_PRETTY_PRINT);

if (file_put_contents('database/user.json', $data_2)) {
    echo "<span style='color:lightgreen;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . 'registration successful' . "</span>";
  }else{

    echo "<span style='color:red;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . 'request declined' . "</span>";;
  }

}
}

?>

