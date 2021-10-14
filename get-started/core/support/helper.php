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




function header_file(){
//header function calling in index
  return realpath(__DIR__. "/layout/header.php");
}

function master_file(){
//master function calling in index
  return realpath(__DIR__. '/layout/master.php');
}


function footer_file(){
//footer function calling in index
  return realpath(__DIR__. '/layout/footer.php');
}
?>