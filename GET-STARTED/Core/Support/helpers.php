<?php
function file_header(){
    return realpath(__DIR__. "/Layout/header.php");
}
function file_master(){
    return realpath(__DIR__."/Layout/master.php");
}
function file_footer(){
    return realpath(__DIR__."/Layout/footer.php");
}
function action($action)
{
 $actions = __DIR__ . './action/' . $action . '.php';
 if (has_Action($actions)) {
     return realpath($actions);
 } else {
     return __DIR__ . "/action/fallbacks.php";
 }
}
function has_Action($actions)
{
    return file_exists($actions);
}
function file_json(){
    return realpath(__DIR__."/../../Database/user.json");
}
?>