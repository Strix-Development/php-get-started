<?php

$fname= $_POST["fname"];
$lname= $_POST["lname"];
$email= $_POST["email"];
$password= $_POST["password"];
$cpass= $_POST["con-pass"];
$number= $_POST["number"];

// validations for empty form and password match

if($fname==''|| $lname==''||$email==''||$password==''||$number==''||$role=''){
    echo "<h1 style=color:tomato>☠Please fill up the form☠</h1>";
}elseif($password!==$cpass){
    echo "<h1 style= color:tomato>☠Password didn't matched☠</h1>";
}else{
    $data=array(
        'First-name'=>$fname,
        'Last-name'=>$lname,
        'Email'=>$email,
        'Password'=>$password,
        'Number'=>$number,
        'Role'=>$_POST['role'],
    );
   
    
    //using file_get_content function to get data from json file
    // and [json_decode] to decode the data inside json file

$get_content=file_get_contents(__DIR__.'/../../../database/user.json'); 
$data1=json_decode($get_content,true);


// assigning id number to individuals data
if(count($data1)==0){
    $data['ID']=1;
}
$id=[];
foreach ($data1 as $data_id)
     {array_push($id,$data_id['ID']);
      $var=count($id)+1;
      $data['ID']=$var;}
    

// email already exists check
$mail=array_filter($data1,function($data1){
    if($_POST['email']==$data1['Email']){
        echo "Email you entered is already in use!";
    exit;
    }
});

// putting content into the json database 
// using json_encode to encode the data inside json file

$data1[]=$data;

$formdata= json_encode($data1, JSON_PRETTY_PRINT, );

if(
file_put_contents(__DIR__.'/../../../database/user.json',$formdata)){

echo "<h1 style=color:green;>☠Successfully ☠ Registered☠</h1>";}
}



?>

