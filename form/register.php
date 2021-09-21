 
<?php


$fname = $lname = $pass = $conpass = $email = $num ="";
$fnameerror = $lnameerror = $passerror = $conpasserror = $emailerror = $numerror =  "";

//FIRST NAME VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["fname"])){   
        $fnameerror = "you forgot to enter your first name";
    }else{
        $fname = test_input($_POST["fname"]); 
        if (!preg_match("/^[a-zA-Z-' ]*$/",$fname)) {
            $fnameerror = "allowed only letter and white space";
     }
    }
}

    

//LAST NAME VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
        if(empty($_POST["lname"])){   
            $lnameerror = "you forgot to enter your last name";
        }else{
            $lname = test_input($_POST["lname"]); 
            if (!preg_match("/^[a-zA-Z-' ]*$/",$lname)) {
                $lnameerror = "allowed only letter and white space";
         } 
        }
        }    


//PASSWORD VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["pass"])){   
        $passerror = "Password is mendatory";
    }else{
        $pass = test_input($_POST["pass"]); 
        if (strlen($_POST["pass"]) <= '8'){
           $passerror = "Your password must contain atlest 8 characters";
        }
    elseif(!preg_match("#[a-z]+#",$pass)){
    $passerror = "must enter atleast 1  letter ";
    }else{
    $passerror = "confirm your password";
    }
    }
    }   


//CONFIRM PASSWORD VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    if(empty($_POST["conpass"])){   
        $conpasserror = "confirm  password is mendatory";
    }else{
        $conpass = test_input($_POST["conpass"]);  
    }
    }   



//E-MAIL VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
 if (empty($_POST["email"])) {
    $emailerror = "Email is required";
  } else {
    $email = test_input($_POST["email"]);
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        $emailerror = "You Entered An Invalid Email Format"; 
    }
  }
}


//PHONE NUMBER VALIDATION
if ($_SERVER["REQUEST_METHOD"] == "POST"){
if (empty($_POST["num"])) {
    $numerror = " Add your phone number";
  } else {
    $num = test_input($_POST["num"]);
  }
}




    function test_input($data) {      // test_input is a user defined function and other are  in-built function
        $data = trim($data);   //data me white space hai trim remove krega and remove predefined character
        $data = stripslashes($data);  // agr data me slash h to ye usko hta dega
        $data = htmlspecialchars($data);  //special data ko html entity me convert kr dega
        return $data;
      }

?>





