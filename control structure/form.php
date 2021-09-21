<!-- validation se agr koi bina form fill kie submit krega to validation error ati hai ki fill kro to scanner
scanning nhi kr skta islie validation jruri hai to is se database me data submit hi ni hoga-->


<?php

$nameerror = $emailerror = $websiteErr = $genderErr = ""; //variables for collecting error
$fname = $password = $email = $message = $website = $submit =$comment = $gender = "";  //variables for collecting data

// global variable ke pas kon sa mehod aya h get ya post post h mtlb ye true hai to body ke andr gya
if ($_SERVER["REQUEST_METHOD"] == "POST"){
// agr bina form ko fill kie submit button pe click kia to error msg ayega
//code for name
if(empty($_POST["name"])){   //empty
    $nameerror = "First Name is mendatory";
}else{
    $name = test_input($_POST["name"]);  //value letter nhi hai to ayega ye msg otherwise kuch nhi ayega 
if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
  $nameerror = "Only letters and white space allowed";
}
}
}  


 



//code for email
if(empty($_POST["email"])){
    $emailerror = "email is mendatory";
}else{
    $email = test_input($_POST["email"]);  // email ka format shi nhi hai to
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailerror = "Invalid email format please write valid format";
    }
    
}


if (empty($_POST["website"])) {
    $websiteErr = "enter your website";
  } else {
    $website = test_input($_POST["website"]);
    // check if URL address syntax is valid
    if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
      $websiteErr ="Invalid URL";
    }    
  }
 

  if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } else {
    $gender = test_input($_POST["gender"]);
  }




// test_input is a function ($data) is a argument ke rup me ek variable hai ($data) isme data pass 
// hoga jnha hm isko call krenge
// form se jo data collect kia jata h usko data ko direct database me ni bheja jata usme se kuch data ko htaya
// jata h jo ki jruri h unhi chejjo ko htane ke lie ye fuction bnaya hai

function test_input($data) {      // test_input is a user defined function and other are  in-built function
    $data = trim($data);   //data me white space hai trim remove krega and remove predefined character
    $data = stripslashes($data);  // agr data me slash h to ye usko hta dega
    $data = htmlspecialchars($data);  //special data ko html entity me convert kr dega
    return $data;
  }
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .errorcolor {color:red;}    /*class */
    </style>
</head>
<body>
<!--hum ynha pe ($server) global variable lia html form se data colect krke php ke pas bhej ra h -->
<!-- agr php ke pas data ko nhi bheja to kaise pta lgega data thik h ya mhi-->
 <!-- un action usually write php fil-->
<!-- HTML SPECIAL CHARACTER FUNCTION --jo bhi special character hote hai unko html ki entity me covert
   kr dete hai $_server ko hacher hack kr skte hai is se function se vo hacking ynhi pe ruk jati hai-->

<h2> FORM WITH VALIDATION </h2>
<p><span class= "errorcolor"> * mendatory field </span> </p>    <!--form ke upr ayegi ye validation  -->

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
Name: <input type="text" name="name" id="name">
<span class="errorcolor">* <?php echo "$nameerror"; ?></span><br><br>


password: <input type="password" name="pass"><br><br>

email: <input type="text" name="email">
<span class="errorcolor">* <?php echo "$emailerror"; ?></span><br><br>

comment: <textarea name="comment" rows="6" cols="24"></textarea><br><br>

website: <input type="text" name="website">
  <span class="errorcolor">*<?php echo "$websiteErr"; ?></span>
  <br><br>


 gender: <input type="radio" name= "gender" value="female">Female
<input type="radio" name = "gender" value="male">Male
<input type="radio" name = "gender" value="other">Other
<span class="errorcolor">* <?php echo $genderErr;?></span><br><br>


submit: <input type="submit" name="submit" value="submit">


    </form>

<?php 
echo $fname;
echo "<br>";

echo $password;
echo "<br>";

echo $email;
echo "<br>";

echo $comment;
echo "<br>";

echo $website;
echo "<br>";

echo $gender;
echo "<br>";

echo $submit;


?>
</body>
</html>