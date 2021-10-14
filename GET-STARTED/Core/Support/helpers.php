<?php
// header function 
function file_header()
{
    return realpath(__DIR__ . "/Layout/header.php");
}
// master function 
function file_master()
{
    return realpath(__DIR__ . "/Layout/master.php");
}
// footer function 
function file_footer()
{
    return realpath(__DIR__ . "/Layout/footer.php");
}
// action function
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
// json function
function file_json()
{
    return realpath(__DIR__ . "/../../Database/user.json");
}
?>