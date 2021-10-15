<?php
function action($action)
{
$actions = __DIR__ . './action/' . $action . '.php';
if (has_Action($actions)) {
return realpath($actions);
} else {
return __DIR__ . "/action/fallbacks.php";
}
}
/**
* create has_Action
*@return the file is exists or not
*if file exists then the action is successsfully submit
*else
*It goes to the fallbacks.php file in action folder
*/

function has_Action($actions)
{
return file_exists($actions);
}

// header file path function
function header_file(){
    return realpath(__DIR__. "/layout/header.php");
}

// master-content path function
function master_file(){
    return realpath(__DIR__. "/layout/content.php");
}

// footer-file path function
function footer_file(){
    return realpath(__DIR__. "/layout/footer.php");
}

// json-file path function
function json_file(){
    return realpath(__DIR__. "../../../database/user.json");
}


// function index_file(){
//     return realpath(__DIR__. "../../../index.php");
// }
// require_once index_file();

// function image(){
//     return realpath(__DIR__. "../../../image/image.jpg");
// }
// require_once image()

?>

