<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
</head>

<body>

</body>

</html>


<?php
//  use this in helper.php
function action($action)
{
  $actions = __DIR__ . './action/' . $action . '.php';
  if (has_Action($actions)) {
    return realpath($actions);
  } else {
    return __DIR__ . "action/fallback.php";
  }
}

//create has_Action
//    return 'the file is exists or not';
//    if ('file exists then the action is successsfully submit'){

// } else{'
//    It goes to the fallbacks.php file in action folder';}



function has_Action($actions)
{
  return file_exists($actions);
}
?>

<?php


function files()
{

  $array = array(

    'name'      => $_POST['fname'],
    'lname'     => $_POST['lname'],
    'phone'     => $_POST['phname'],
    'email'     => $_POST['ename'],
    'password'  => $_POST['pname'],
    'role'      => $_POST['role'],
  );


  $data = json_encode($array, JSON_PRETTY_PRINT);


  if (file_put_contents('database/user.json', $data, FILE_APPEND | LOCK_EX)) {
    echo "<span style='color:red;font-size:30px;font-family: Audiowide, sans-serif;text-shadow: 3px 3px 3px #ababab;'>" . 'registration successful' . "</span>";
  }
}











?>